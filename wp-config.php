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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prompthealth' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9CBwX0S,wS[@5mgCs=sl:31)o@S[PuVr|?ef-yw82?8RIIDgn+b{t`3N5 {IC4v ' );
define( 'SECURE_AUTH_KEY',  'ZOTfBDDZbs3Ov 5U>@zcq]]X4FhG82g|8Xc`w4O[tp1:w0GTa`bWET#Ns)hj{$&^' );
define( 'LOGGED_IN_KEY',    '#NX@:OTw0M(uL=6_t1okq7w^.sUH[5%&y7fkhMe9p5D *rd{O6eFiBgI5k|`@qhr' );
define( 'NONCE_KEY',        ':wc[?FRG 0.bu#![$#sqRBPAk< ~.!{`tj:P ?>J^Sy0o6AQ9##rXG V8+}Mn0>r' );
define( 'AUTH_SALT',        'N66UcBwqhTPM9Cw-[6_A!2$VG^1P6+0C5WUsi~8*sKx^6l1;j#@vsh+FQNQD~x;(' );
define( 'SECURE_AUTH_SALT', '=-g2S$by;Xylp@GxZ-VB<PMMI}T51UtGpl,lS`az*vd3?t|qZW;:Hi?m28[7lG24' );
define( 'LOGGED_IN_SALT',   ' .{G;VtQmH]&/_~|u`iKdd9oorMZS6v2Px-clQ&Av6gyCfO]kfht~IymxQZP$]Wf' );
define( 'NONCE_SALT',       'tenr@wqE2&n$H4K0TUHsNFhtg0O=#s__/m}n+u1LY$5gVnq4ulv[,E6p3cQyl}bT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
