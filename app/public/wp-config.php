<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'LP)Cpz>b9noS_8-XdwRMiA1RVtENAfo1e9u&NUnc5D[C[u-<EB+5`,jam`+THb2E' );
define( 'SECURE_AUTH_KEY',   't5MXiL[m^ZZD=P}O$RAC:3bNG|Woy0OxNI9#RbG*C;I-9sgR|NFNZ []T8F7?)[S' );
define( 'LOGGED_IN_KEY',     'M@:|}n,/;)RWARf7g}xVHmD=AF9hb1XH[YXL*J7+0pt`:lPat!6s^z2vn[5@%OBM' );
define( 'NONCE_KEY',         'py_L}CzjKv&G4s&P4AM8s-XO!IfB<;1_)gB(DuP#poX/T@(NGy*IMXN|;,tH=(Bw' );
define( 'AUTH_SALT',         'I[0</w5#$pYGv9>;<(`$JzMq8|Fe{<|0z=|cV|ABz?tMnNN^4|,{`wuBG: ~bIN(' );
define( 'SECURE_AUTH_SALT',  '4[vWI4=,3[K)kG~=Oo_j?7g0qgN]fcH?+fI;471>FNz9+)n<-3*0A^(qeJ@4]k`D' );
define( 'LOGGED_IN_SALT',    'Slz)$dN/m|nGG5Q)hh3r(o[&N:!he }3B3E|gkmh.q-dRZ8Cv[8(?oQ}a.2{y<7a' );
define( 'NONCE_SALT',        '0FI3xE.o35zBnC8qZjIwu%]QwU;T;2/=V],o05h6e<QC7[yfU`v>aSM)E8G0Q8r4' );
define( 'WP_CACHE_KEY_SALT', '};Q|L&P]c2SA:9Gi3v<Kc--u*|4S{edw9BGO-(E}PM^<`,>QkdU%1xn%wqq!)}Sa' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
