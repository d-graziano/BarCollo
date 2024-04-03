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
define( 'DB_NAME', 'barcollo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'WXtpAcT2jrVX3sFA' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          '7*Y7gm!8!,RLfwN3,D/wQlV9Vwqz60a9*Dky?TGwTTuIngK~QR_?;(/muDu8->yP' );
define( 'SECURE_AUTH_KEY',   '+Cr$b!}4Em44dGKi8j9S]H@VY`B:V<km^B2e0z^8N0ht{.TkwRVdMRa3#|H:$=V]' );
define( 'LOGGED_IN_KEY',     '|5d>9lN:A^WjMSBP?0#R/Gf5I^*JIQd-UIZ:282o_#&/&YrzzN{[STWET/qB.;FR' );
define( 'NONCE_KEY',         '3ooX_7| tB4Ia`MvHrJj$1uK&=SOPLfv,&c{ncNNVzK_JvBO@?CAl`+Z#, 1j9 n' );
define( 'AUTH_SALT',         '?j0jW/;p7$qX?z--,cEF_*>C1w~W9*q]Vn4z{H3q!GY6yA[{#G6Y;(z=TTsdy;h.' );
define( 'SECURE_AUTH_SALT',  'niC(-aUi1|T%9OCn|7w{Vu}_u!c,:LxG0aWW`P6fDbb|Wr!]>goWx6*g#OV@n:vS' );
define( 'LOGGED_IN_SALT',    '#p}&SD`K39xJ*CZ !gA+>pH hhkOG,JkX7ZF/a@`r__f[D_^5uLyn9v?#O*Z<aTJ' );
define( 'NONCE_SALT',        'YvdjM8PRp,t$UU#[u7#hnh|3c;#}i>nDV1}~A{.fj|n>mp<Dz!RByZuLup-BH1kK' );
define( 'WP_CACHE_KEY_SALT', 'xygEtY`EIGRq^kfZvcW@XtUa_vEvM&vQpL;EQ@`YG+l4V:Se9t&[BAx3Nfn7j+7}' );


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

define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
