<?php
/**
 * simpleX functions and definitions
 *
 * Sets up the theme and provides helper functions for dynamic theme functionality.
 *
 */

/* Enqueue styles */
function simplex_enqueue_styles() {
    wp_enqueue_style( 'simplex-style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'simplex_enqueue_styles' );

/* Register menus */
function simplex_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'simplex' ),
            'footer'  => __( 'Footer Menu', 'simplex' ),
        )
    );
}
add_action( 'after_setup_theme', 'simplex_register_menus' );

/* Add support for custom logos */
function simplex_custom_logo_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'simplex_custom_logo_setup' );

/* Register Customizer settings for footer logo */
function simplex_customize_register_footer_logo( $wp_customize ) {
    $wp_customize->add_section( 'simplex_footer_logo' , array(
        'title'      => __( 'Footer Logo', 'simplex' ),
        'priority'   => 61,
    ));

    $wp_customize->add_setting( 'footer_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
        'label'    => __( 'Footer Logo', 'simplex' ),
        'section'  => 'simplex_footer_logo',
        'settings' => 'footer_logo',
    )));
}
add_action( 'customize_register', 'simplex_customize_register_footer_logo' );

/* Register Customizer settings for footer headings */
function simplex_customize_register_footer_headings( $wp_customize ) {
    $wp_customize->add_section( 'simplex_footer_headings' , array(
        'title'      => __( 'Footer Headings', 'simplex' ),
        'priority'   => 62,
    ));

    // Footer Contact Heading
    $wp_customize->add_setting( 'footer_contact_heading', array(
        'default'   => __( 'Contact', 'simplex' ),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'footer_contact_heading', array(
        'label'      => __( 'Contact Section Heading', 'simplex' ),
        'section'    => 'simplex_footer_headings',
        'type'       => 'text',
    ));

    // Other Footer Heading
    $wp_customize->add_setting( 'footer_other_heading', array(
        'default'   => __( 'Quick Links', 'simplex' ),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'footer_other_heading', array(
        'label'      => __( 'Other Section Heading', 'simplex' ),
        'section'    => 'simplex_footer_headings',
        'type'       => 'text',
    ));
}
add_action( 'customize_register', 'simplex_customize_register_footer_headings' );

/* Output dynamic styles if needed */
function simplex_customizer_styles() {
    ?>
    <style type="text/css">
        /* Example: Add styles based on Customizer options */
    </style>
    <?php
}
add_action( 'wp_head', 'simplex_customizer_styles' );