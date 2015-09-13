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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'virtualbloks');

/** MySQL database username */
define('DB_USER', 'virtualbloks');

/** MySQL database password */
define('DB_PASSWORD', 'virtualbloks_2015');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SzuxYK%y6R3[o*Tj^)QR`CHlUwsPGeb*2`_`N>N5J%|C~XI2l0l  BY2E{ixkxde');
define('SECURE_AUTH_KEY',  '74UmDAmI*W#fLtQTa:R+7o4B02~tSU!5r3V@T;HL/B~A;>5a>QW.__n8B Fs5OI=');
define('LOGGED_IN_KEY',    ',5Y8}m0pv<SG@Dn@tdr@nA+sr~cvB)4aKsR-1bWz#=RJXrf>?NTU+fhORul, 4EX');
define('NONCE_KEY',        '4Y9Q%6Xmc}!A~gi5%{=yate5K!G,`ezC[0$F$TAyF<;Aur)1@,r{mu0*pc|}Ihhi');
define('AUTH_SALT',        ')yILJ0j~ uE`Lvpl:[)i[Mr)X}OXped16t2U}!5fRbQ-u]a<T1GR,0#voCGRhy/L');
define('SECURE_AUTH_SALT', 'i.?#27{g8j;;xq6AImZL8~zgdN=7d!:n)wqKU%IpJ-,2l?Q:T3l1bgC|1RGw%)wY');
define('LOGGED_IN_SALT',   'Fx0f-U3.?8L5t(b+G/F]lqdkP0bZL>]0Q(0l/+pS2$(dRP8$.$rFJ=X3gc|bT70-');
define('NONCE_SALT',       'PLb${<-pp]H{~(M3 4p1:%5y0Var)^WZX|+Z~iMs#DQ%9F^yFO[<u{yp)}ODZ]_{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
