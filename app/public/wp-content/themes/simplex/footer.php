<?php
/**
 * The footer for the simpleX theme
 *
 * @package simpleX
 */
?>

</div><!-- #main -->

<footer>
    <div id="footer-container">
        <div class="footer-row footer-top">
            <!-- Footer Navigation -->
            <div class="footer-column footer-nav">
                <h3><?php echo get_theme_mod( 'footer_other_heading', 'Quick Links' ); ?></h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer', // Footer menu location
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                ) );
                ?>
            </div>

            <!-- Footer Logo -->
            <div class="footer-column logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php if ( get_theme_mod( 'footer_logo' ) ) { ?>
                        <img src="<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>" alt="Footer Logo">
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Placeholder Logo">
                    <?php } ?>
                </a>
            </div>

            <!-- Contact Info Section -->
            <div class="footer-column footer-contact">
                <h3><?php echo get_theme_mod( 'footer_contact_heading', 'Contact' ); ?></h3>
                <ul>
                    <li>Email: <a href="mailto:<?php echo get_theme_mod( 'footer_contact_email', 'info@yourwebsite.dk' ); ?>"><?php echo get_theme_mod( 'footer_contact_email', 'info@yourwebsite.dk' ); ?></a></li>
                    <li>Telefon: <?php echo get_theme_mod( 'footer_contact_phone', '+45 12 34 56 78' ); ?></li>
                    <li>Adresse: <?php echo get_theme_mod( 'footer_contact_address', 'Address 42, 1234 City' ); ?></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="footer-row footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> - <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>

</body>
</html>