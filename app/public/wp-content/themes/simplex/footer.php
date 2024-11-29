<?php
/**
 * The footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>

</div><!-- #main -->

<footer>
    <div id="footer-container">
        
        <div class="footer-row footer-top">
            <!-- Navigation -->
            <div class="footer-column footer-nav">
                <h3>Quick links</h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer', 
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                ) );
                ?>
            </div>

            <!-- Logo -->
            <div class="footer-column footer-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Placeholder Logo">
                </a>
            </div>

            <!-- Contact Info -->
            <div class="footer-column footer-contact">
                <h3>Contact</h3>
                <ul>
                    <li>Email: <a href="mailto:info@yourwebsite.dk">info@yourwebsite.dk</a></li>
                    <li>Telefon: +45 12 34 56 78</li>
                    <li>Adresse: adress 42, 1234 City</li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-row footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> - Your Website. All rights reserved.</p>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>

</body>
</html>