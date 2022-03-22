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
define( 'DB_NAME', 'wordpress_favreau' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'cXX8Ogbt`j{tJ);bA!i$iP.6EhCmCw|8/xS=PB B4xF:X,8:L9~i$kQja>mvZM]b' );
define( 'SECURE_AUTH_KEY',  'V?3#UAYr~4AKG${}/&=(&5qz,ev6Z6~}K%KWFpo& e92^~P]RYRJ9A$7uNU#M=$W' );
define( 'LOGGED_IN_KEY',    'P$<{0s=qaq4v_F4+qf4-1+_hn]m%;>[Mys~wII5W|{<?}<l?qly2Q6Ha<=ITn%+C' );
define( 'NONCE_KEY',        ']=^W3c!Bp}WGYmGAed^nsPYbKvFZl=]zcQG2pPMKxBnL?Jig^Z89KL6fzlqqlh7|' );
define( 'AUTH_SALT',        '+AHXv>%5$o[b#7t>ghnGp{(lyl/R0.H+9a8]Yru>YAaFCk )3IJgJYi0s,M43qaC' );
define( 'SECURE_AUTH_SALT', 'm=j6,544*H8/.tM0pQ{Rvj_n2;5Xo!(Nl-v{>D6G<D#F^_1hTT2d:%u`Qet?EVp/' );
define( 'LOGGED_IN_SALT',   ',]*ffW;vcL``p; XIPUumXQd^&><~}mglTsf^]In(lP5k*l|yX/=H0|Z5IJ3:cNQ' );
define( 'NONCE_SALT',       '*N#.3hc(`Yo@rS;92DP{0McQo>rrCc$1[Fv9^zF]r6:Wb@I|vy3S/aq.m$NLrM(3' );

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
