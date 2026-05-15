</main><!-- /#main -->

<footer class="site-footer" aria-label="Site footer">
    <div class="container">

        <div class="footer__grid">

            <!-- Col 1: Brand -->
            <div class="footer__brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo" aria-label="BRD Pest Solutions">
                    <!-- PLACEHOLDER: Replace with SVG logo when available -->
                    <span class="header__logo-brd">BRD</span>
                    <span class="header__logo-sub">PEST SOLUTIONS</span>
                </a>
                <p class="footer__tagline">Pest control that gets it done.</p>
                <p class="footer__copy">&copy; <?php echo esc_html( date( 'Y' ) ); ?> BRD Pest Solutions. All rights reserved.</p>
            </div>

            <!-- Col 2: Navigation -->
            <div class="footer__links">
                <h3 class="footer__heading">Quick Links</h3>
                <?php
                wp_nav_menu( [
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => 'brd_footer_nav_fallback',
                    'menu_class'     => 'footer__nav',
                ] );
                ?>
            </div>

            <!-- Col 3: Service Areas + Contact -->
            <div class="footer__areas">
                <h3 class="footer__heading">Service Areas</h3>
                <ul class="footer__area-list">
                    <li><a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>">Georgia</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>">Maryland</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>">Oklahoma</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/texas' ) ); ?>">Texas</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>">Utah</a></li>
                </ul>

                <div class="footer__contact">
                    <h3 class="footer__heading">Ready to start?</h3>
                    <!-- PLACEHOLDER: Replace with real phone number when provided -->
                    <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="footer__cta-link">
                        Get a Free Quote &rarr;
                    </a>
                </div>
            </div>

        </div><!-- /.footer__grid -->

        <div class="footer__bottom">
            <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>
            <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>">Terms of Service</a>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
