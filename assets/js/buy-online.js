(function () {
    'use strict';

    const TOTAL_STEPS = 5;

    const state = {
        service:   'general-pest',
        plan:      'monthly',
        firstName: '',
        lastName:  '',
        phone:     '',
        email:     '',
        address:   '',
        prefDay:   '',
        prefTime:  '',
        notes:     '',
    };

    let currentStep = 1;
    let stripeCardElement = null;

    /* ---- DOM refs ---- */
    const card         = document.getElementById('buy-card');
    const summary      = document.getElementById('buy-summary');
    const confirmation = document.getElementById('buy-confirmation');

    if (!card) return;

    const progressDots  = card.querySelectorAll('.buy-progress__dot');
    const progressLines = card.querySelectorAll('.buy-progress__line');
    const steps         = card.querySelectorAll('.buy-step');

    /* ---- Step navigation ---- */
    function goToStep(n) {
        steps.forEach(s => s.classList.remove('is-active'));
        const target = document.getElementById('step-' + n);
        if (target) target.classList.add('is-active');
        currentStep = n;
        updateProgress(n);
        if (n >= 3 && summary) summary.removeAttribute('hidden');
        updateSummary();
        card.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function updateProgress(active) {
        progressDots.forEach((dot, i) => {
            dot.classList.toggle('is-active', i + 1 === active);
            dot.classList.toggle('is-done',   i + 1 < active);
        });
        progressLines.forEach((line, i) => {
            line.classList.toggle('is-done', i + 1 < active);
        });
    }

    /* ---- Event delegation ---- */
    card.addEventListener('click', function (e) {
        const nextBtn      = e.target.closest('.buy-next');
        const backBtn      = e.target.closest('.buy-back');
        const serviceCardEl = e.target.closest('.service-card');
        const planCardEl   = e.target.closest('.plan-card');

        if (nextBtn) {
            const next = parseInt(nextBtn.dataset.next, 10);
            if (validateStep(currentStep)) {
                captureStep(currentStep);
                goToStep(next);
            }
        }

        if (backBtn) {
            goToStep(parseInt(backBtn.dataset.back, 10));
        }

        if (serviceCardEl) {
            card.querySelectorAll('.service-card').forEach(c => {
                c.classList.remove('is-selected');
                c.setAttribute('aria-checked', 'false');
            });
            serviceCardEl.classList.add('is-selected');
            serviceCardEl.setAttribute('aria-checked', 'true');
            state.service = serviceCardEl.dataset.service || state.service;
        }

        if (planCardEl) {
            card.querySelectorAll('.plan-card').forEach(c => {
                c.classList.remove('is-selected');
                c.setAttribute('aria-checked', 'false');
            });
            planCardEl.classList.add('is-selected');
            planCardEl.setAttribute('aria-checked', 'true');
            state.plan = planCardEl.dataset.plan || state.plan;
        }
    });

    /* ---- Complete order button ---- */
    const completeBtn = document.getElementById('complete-order');
    if (completeBtn) {
        completeBtn.addEventListener('click', submitOrder);
    }

    /* ---- Keyboard: Enter/Space on selectable cards ---- */
    card.addEventListener('keydown', function (e) {
        if (e.key !== 'Enter' && e.key !== ' ') return;
        const sc = e.target.closest('.service-card');
        const pc = e.target.closest('.plan-card');
        if (sc || pc) { e.preventDefault(); e.target.click(); }
    });

    /* ---- Validation ---- */
    function validateStep(n) {
        if (n !== 2) return true;

        let valid = true;
        ['first-name', 'last-name', 'phone', 'email', 'address'].forEach(function (id) {
            const el = document.getElementById(id);
            if (!el) return;
            const empty = !el.value.trim();
            el.classList.toggle('has-error', empty);
            if (empty) valid = false;
        });

        const emailEl = document.getElementById('email');
        if (emailEl && emailEl.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value)) {
            emailEl.classList.add('has-error');
            valid = false;
        }

        return valid;
    }

    /* ---- Capture form data per step ---- */
    function captureStep(n) {
        function val(id) { const el = document.getElementById(id); return el ? el.value.trim() : ''; }

        if (n === 2) {
            state.firstName = val('first-name');
            state.lastName  = val('last-name');
            state.phone     = val('phone');
            state.email     = val('email');
            state.address   = val('address');
            try {
                sessionStorage.setItem('brd_lead', JSON.stringify({
                    firstName: state.firstName,
                    lastName:  state.lastName,
                    phone:     state.phone,
                    email:     state.email,
                    address:   state.address,
                }));
            } catch (_) {}
        }

        if (n === 4) {
            state.prefDay  = val('pref-day');
            state.prefTime = val('pref-time');
            state.notes    = val('notes');
        }
    }

    /* ---- Update summary sidebar ---- */
    function updateSummary() {
        const addrWrapper = document.getElementById('summary-address-wrapper');
        const addrVal     = document.getElementById('summary-address');
        if (state.address && addrWrapper) {
            addrWrapper.removeAttribute('hidden');
            if (addrVal) addrVal.textContent = state.address;
        }
    }

    /* ---- Stripe init ---- */
    function initStripe() {
        const vars = window.brdBuyVars || {};
        if (typeof Stripe === 'undefined' || !vars.stripeKey) return;

        const stripe   = Stripe(vars.stripeKey);
        const elements = stripe.elements();
        const cardEl   = elements.create('card', {
            style: {
                base: {
                    fontSize:    '15px',
                    color:       '#0c232e',
                    fontFamily:  'Inter, sans-serif',
                    '::placeholder': { color: '#a0adb5' },
                },
                invalid: { color: '#e53e3e' },
            },
        });

        const mount = document.getElementById('card-element');
        if (mount) {
            mount.innerHTML = '';
            cardEl.mount('#card-element');
            cardEl.on('focus', () => mount.classList.add('is-focused'));
            cardEl.on('blur',  () => mount.classList.remove('is-focused'));
            cardEl.on('change', function (e) {
                const errEl = document.getElementById('card-errors');
                if (errEl) errEl.textContent = e.error ? e.error.message : '';
            });
        }
        stripeCardElement = cardEl;
        window._brdStripe = stripe;
    }

    /* ---- Submit order ---- */
    function submitOrder() {
        const vars = window.brdBuyVars || {};

        // Preview mode (no Stripe key): skip straight to confirmation
        if (typeof Stripe === 'undefined' || !vars.stripeKey || !stripeCardElement) {
            showConfirmation();
            return;
        }

        const btn = document.getElementById('complete-order');
        if (btn) { btn.textContent = 'Processing…'; btn.disabled = true; }

        const stripe = window._brdStripe;

        fetch(vars.ajax + '?action=brd_setup_intent', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body:    'nonce=' + encodeURIComponent(vars.nonce || ''),
        })
        .then(function (r) { return r.json(); })
        .then(function (data) {
            if (!data.success) throw new Error(data.data || 'Setup failed');
            return stripe.confirmCardSetup(data.data.client_secret, {
                payment_method: {
                    card: stripeCardElement,
                    billing_details: {
                        name:    state.firstName + ' ' + state.lastName,
                        email:   state.email,
                        phone:   state.phone,
                        address: { line1: state.address },
                    },
                },
            });
        })
        .then(function (result) {
            if (result.error) {
                const errEl = document.getElementById('card-errors');
                if (errEl) errEl.textContent = result.error.message;
                if (btn) { btn.textContent = 'Complete Order'; btn.disabled = false; }
                return;
            }
            return fetch(vars.ajax + '?action=brd_complete_order', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    nonce:          vars.nonce || '',
                    payment_method: result.setupIntent.payment_method,
                    first_name:     state.firstName,
                    last_name:      state.lastName,
                    phone:          state.phone,
                    email:          state.email,
                    address:        state.address,
                    service:        state.service,
                    plan:           state.plan,
                    pref_day:       state.prefDay,
                    pref_time:      state.prefTime,
                    notes:          state.notes,
                }).toString(),
            }).then(function (r) { return r.json(); });
        })
        .then(function () { showConfirmation(); })
        .catch(function (err) {
            console.error(err);
            const errEl = document.getElementById('card-errors');
            if (errEl) errEl.textContent = 'Something went wrong. Please try again or call 1-833-505-9715.';
            if (btn) { btn.textContent = 'Complete Order'; btn.disabled = false; }
        });
    }

    /* ---- Show confirmation ---- */
    function showConfirmation() {
        const progress = card.querySelector('.buy-progress');
        if (progress) progress.style.display = 'none';
        steps.forEach(s => s.classList.remove('is-active'));
        if (confirmation) confirmation.removeAttribute('hidden');
        if (summary) summary.setAttribute('hidden', '');
        try { sessionStorage.removeItem('brd_lead'); } catch (_) {}
        card.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    /* ---- Init ---- */
    goToStep(1);
    initStripe();

})();
