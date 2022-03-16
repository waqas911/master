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
define( 'DB_NAME', 'waqas' );

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
define( 'AUTH_KEY',         'Ua5q}7w+5fog(Z`~p`)X6Ce?;}T`cKLL|5i909#HO+PdX3[rCQP>CO}&  ^O-K0/' );
define( 'SECURE_AUTH_KEY',  'w8oNb+hwAqrH(}DpFL<DpM;fzp.1f=]ALVUA-PpYG0O{6T7iDQ_&OS]1wloe6.?N' );
define( 'LOGGED_IN_KEY',    'XH*:`C%.c4Qm/B~4j9eDl!2.Pmof-fZo!V!68~_Ig}X#y1Q/FM/A;&4.,!!BHA<5' );
define( 'NONCE_KEY',        'QPPwk%8.j2-@.49>laqxq]<Z^>=]WM,c?P0i5x|GYR9]o* D3H8/Km)KKq9V_$.u' );
define( 'AUTH_SALT',        'f_k/gC ;_A78dEeFG@^]/ >/BD30;&:iB>O/7pxb^gdJN`+R+.Nr0UWau-I8dPAy' );
define( 'SECURE_AUTH_SALT', 'O;W?Q9NXDAzzEq#dnlI uguirj+xt7B4D4|+C[8`^m*~/;v`h+MjQ]L.tNC/}8?(' );
define( 'LOGGED_IN_SALT',   'j~?r9xpGvr1sb#ZS#q7ruA3/1hGd>jzt%L1U3!>y@>}>>%h;MCI9v,43sID=<0EQ' );
define( 'NONCE_SALT',       ').eQ9(z@3]BcV.8qjegcfnk;WsfEa[.*N|E!_(KwWDwi3TiVW#343l:<tuc-/[*#' );

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
