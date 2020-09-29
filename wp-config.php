<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divinebu_wp983' );

/** MySQL database username */
define( 'DB_USER', 'divinebu_wp983' );

/** MySQL database password */
define( 'DB_PASSWORD', '2j.957p2S-' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'orwrrvi8nepbdrsdmuy07t6ny6bcuz3ueztreqlc8fnohhbbmd9wpkmyt3dtf7po' );
define( 'SECURE_AUTH_KEY',  'wam1eohdtvc4vk2u50lmqqkgganmmjaxa3p0a6iaindc2fjjaowetvfjykutbk5v' );
define( 'LOGGED_IN_KEY',    'scb27kk56mwkzkvli5w4sddzhx4nmvgv6ya3byi0rhav23o36adcs94xp8ppwqol' );
define( 'NONCE_KEY',        'swl1e3i20ebmrfxh2sqy23obsfljtgxishllg9heqiydyyzkk64utrbnoqiptbdh' );
define( 'AUTH_SALT',        'awvas4s5dmn5bxlezbncdw17m6gm2v6xltxaiw2c3gyzdhfqyup5dlrpunqacytn' );
define( 'SECURE_AUTH_SALT', 'a0vigcoraqjhyoxbyy2yxrvnxmcrdbthejflxzqmnkkxvvbsnzwinxvzdzpeijjb' );
define( 'LOGGED_IN_SALT',   'ovti2esnskp4p0yztpf5wc82ezpzmh0yazneeg4thwhwtnie0tfxjcimnofurmbe' );
define( 'NONCE_SALT',       '7wpvngvzkyx3ti18wpbtatzexakqza15qaqcmlgahutqyz5snnosg9oeashir7tq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
