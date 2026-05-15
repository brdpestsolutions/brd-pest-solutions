(function () {
    'use strict';

    const header   = document.getElementById('site-header');
    const hamburger = document.getElementById('hamburger');
    const menu     = document.getElementById('mobile-menu');
    const overlay  = document.getElementById('mobile-menu-overlay');

    /* ---- Sticky header: add class after 20px scroll ---- */
    if (header) {
        const handleScroll = () => {
            header.classList.toggle('is-scrolled', window.scrollY > 20);
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // run on load in case page is pre-scrolled
    }

    /* ---- Mobile menu ---- */
    if (!hamburger || !menu || !overlay) return;

    function openMenu() {
        menu.classList.add('is-open');
        overlay.classList.add('is-open');
        hamburger.setAttribute('aria-expanded', 'true');
        hamburger.setAttribute('aria-label', 'Close navigation menu');
        menu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        menu.classList.remove('is-open');
        overlay.classList.remove('is-open');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.setAttribute('aria-label', 'Open navigation menu');
        menu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    hamburger.addEventListener('click', () => {
        hamburger.getAttribute('aria-expanded') === 'true' ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && hamburger.getAttribute('aria-expanded') === 'true') {
            closeMenu();
            hamburger.focus();
        }
    });

    // Close when any nav link or CTA is tapped
    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close menu if window is resized past mobile breakpoint
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && hamburger.getAttribute('aria-expanded') === 'true') {
            closeMenu();
        }
    }, { passive: true });

})();
