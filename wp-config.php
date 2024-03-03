<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'j0mtx1' );

/** Database username */
define( 'DB_USER', 'j0mtx1' );

/** Database password */
define( 'DB_PASSWORD', '4^E3GkeT0oCZJ-rf' );

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
define( 'AUTH_KEY',         'iio7mkcmqzuh9ouyf0gi4ucyozdguiykyjxftq95wr2fo1speopjimbdi1tdxsqw' );
define( 'SECURE_AUTH_KEY',  '4ckgrxjew8y0exxriuzimejy2pu1vvawkroj1wul2p0bt4rtw2vcrfw4dnq5dptu' );
define( 'LOGGED_IN_KEY',    'twosrtlw3ditfhje8b9oabglgtefmay8uideykjo9hceffmoxhcc2wl9bm5569nq' );
define( 'NONCE_KEY',        'utioxsqglcyhuwvtghdv0zle3lnrcu3yqjmt4wvs3whtda2vxs4ttzbxtmxbdcqe' );
define( 'AUTH_SALT',        '0arqgwlernjtjxrkgefsmllt6q8aiophyslbuhsphurfupyupuohpnbrrs6pmqbp' );
define( 'SECURE_AUTH_SALT', 'wcusntn8lrgy8wxrgzuiju9ahfxv7wuoq3kligdzhzq8qwojhpxsdrugin1jkvlu' );
define( 'LOGGED_IN_SALT',   'by47fbqboucc3f1oprfeeqlp1cu1uxqtv2lnsmg4fyk3rloxn823pqnux7gf3wt4' );
define( 'NONCE_SALT',       'gg04hm2hwkh8de06mrzpwcs2m2oxfms5ccwdse4ktpushfvkgq17fov9gios05p6' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/** Allow access from a different domain */
define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'https://synapz.com.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'https://synapz.com.br');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
