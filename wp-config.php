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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' fo0DaJcG(@ffsreB@p7VcjbO7r)N=5Ocf$WDp^{YbOE=_`GD7[y.Aj^Y%[brGO@' );
define( 'SECURE_AUTH_KEY',  'H1p[WA|?g`mV6ln!fqhcJ4pjyiwfB8WcM%7c{lGs)D}g[`k7Nl!@`t&b.mf?L!%&' );
define( 'LOGGED_IN_KEY',    's?o8Di@t0p~|B*)l#!b:z~K4).uA-MgD4^o/d:=QJ0P 0F.a:}2e8SM]iw~?^-CU' );
define( 'NONCE_KEY',        'mon-b^IQ^T_IdV1<K!e7G,3@ela*PXG$)SFdyeZ;r^T|w*VM6=mr2<S|&L5Fv3fO' );
define( 'AUTH_SALT',        'TnT:v,+3p(Sk=!nFJ>[Gtn7LMYxbOe~gk$W^]iO_uAOK>(09IL,e1#ELv+{|6B@-' );
define( 'SECURE_AUTH_SALT', '0:4h)Z+%N1Z``$pURS#|y^3cfOQPSYl+g.x1vK>ZRx(+Kb;Hoa W=XZ`{z(@&=rC' );
define( 'LOGGED_IN_SALT',   'Q1rDP9vhz1)@|1XR#~jGSuP-s428lOQ)NkNc4+,B8+;g~qt;UzW2I-&Yt-Jd0Y$a' );
define( 'NONCE_SALT',       'v:mmj@*AD|BMS@)]~8!Nvkr$m^jDFd};1ih8oq.s1,X4H:^nG{ym1d>,&PSsFuRc' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
