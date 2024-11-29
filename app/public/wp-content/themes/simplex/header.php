<?php
/**
 * The header for the simpleX theme
 *
 * @package simpleX
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <!-- Header Section with Logo and Navigation -->
        <div id="header">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                        the_custom_logo();
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Placeholder Logo">
                    <?php } ?>
                </a>
            </div>

            <nav>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary', // Register your primary menu
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
            </nav>
        </div>
    </header>