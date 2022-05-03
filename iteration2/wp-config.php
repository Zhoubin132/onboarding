<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'perinner_wp877' );

/** Database username */
define( 'DB_USER', 'perinner_wp877' );

/** Database password */
define( 'DB_PASSWORD', 'e!p35bSf2.' );

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
define( 'AUTH_KEY',         'ncctokbdwr6unnryihclcarwkagubfwz96aplcyywqtqmc3ocg7wryix4hv1bdah' );
define( 'SECURE_AUTH_KEY',  '6xszcfmbkrpsb0bncphphvizsxnrnk9kkawzm5eog2fbz0ljkebnybjcj4cn5pq0' );
define( 'LOGGED_IN_KEY',    'eo9pkfvtimowes1odgnkth61swtxixworfumk8sb6xskxugnjklgy74p9npf2x3n' );
define( 'NONCE_KEY',        'ygeulzkp2ivsh4mormb0qdz0txiyhuykoduuuovwyfmfazsaflmrjhhwbwpotfzl' );
define( 'AUTH_SALT',        's9qke574nvovprhjxehwotpjvdj2fbtminjpbx5fuomnxi2xl0mc4uynxwi2jqzl' );
define( 'SECURE_AUTH_SALT', '6yoiabj8fgk8qf8pfg9oombqvmza2wdvu1ggd7flt2rwgm3wo8bvqjukx4bp5rnv' );
define( 'LOGGED_IN_SALT',   'dplxwjuo5rqvu6ukhikjxlmy613yq1yypjs367rmdpe36nkbryo8x9s7uektutci' );
define( 'NONCE_SALT',       'c21si1f2coddg0aukfbpnh2v0vd6hj4x2rs8eybsnjj60tzueivmwgzeq97dklzt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr7_';

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
