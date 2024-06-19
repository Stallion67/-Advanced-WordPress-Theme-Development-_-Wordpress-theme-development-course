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
define( 'AUTH_KEY',          'Yj;l52.n`n==@R fo3?6^GTh^_ngYJ>^8x&v2wA$^u4^cE:#ZbVyjITTHUpn8-n2' );
define( 'SECURE_AUTH_KEY',   'Dc@wDAtc[n;y7eNraK{ir@l?c41UuDJ~`(HpcaD|J@,p*7KAA+>_%5+,$-T e`q)' );
define( 'LOGGED_IN_KEY',     '6SK{S<Y+<r/6%I-@ot.Z&6~|.3K%OTnLAj&[TA:u iA^(r{_lKuJuSmLm5?Y*~ {' );
define( 'NONCE_KEY',         'f,#h6wF8SE{wA0%#ci7(m+$q9F0UhPm?1%&Tdu Od8pOmDP=plAes|lu 3h3,g)a' );
define( 'AUTH_SALT',         '(};TRX,D_gb`.dofN@_[LJ7sDa[OJw_<UJkwqM0e<.R#Uuom4pj^Sb%Ea;!EeS{x' );
define( 'SECURE_AUTH_SALT',  '6[Oz%1Q2Y>a h9Zlp/{QmubcNKBx|f<.)w#Zuzj:[n-b7Ta$kTV1|i_SKM`tK^P#' );
define( 'LOGGED_IN_SALT',    '8YuVH}``,CdHHc,F}gOO2wH=0qbf 1A7g:S9PZV?>E[csrC2*EO[G@j4Wmfi4o?a' );
define( 'NONCE_SALT',        '47o.[TU9P+$hp0vw^{v9O4|u=]Sybn|Iz9lEx/HVxo CP+,7s&*NV;gZz~@_xw[l' );
define( 'WP_CACHE_KEY_SALT', '2]Ciz5YIQ;L3|&RaRv7 >Qx>dQbz;E+$Eb3S>1AKNw7]Q:>OkzSbG*I0_OB$1P{;' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
