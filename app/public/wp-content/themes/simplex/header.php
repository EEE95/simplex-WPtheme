<?php
/**
 * The header for the simplex theme
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
        <!-- Here you can add logo and navigation -->
        <div id="header">
            <div id="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Placeholder Logo">
                </a>
            </div>
            <nav>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary', // If you have registered a menu
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
            </nav>
        </div>
    </header>

