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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'D6Fg/2-Ox-.cC+D%u{vmW82ld*^Eq-HU_{<ka{*h|3`|!wi;Z-qME]UhK|-#+#10');
define('SECURE_AUTH_KEY',  'Tl[JigWa]<7<g*2NS$+R-Ito.O (8@$i8]LZu0wH @04rlo*:@$H{=RW -O50s2g');
define('LOGGED_IN_KEY',    'XoVR0[@V}^ru6/+|*E~A[gif#S=!}+RA-uozp yT.zdZ&XnNm)0+)qF|UGjKG)>^');
define('NONCE_KEY',        'MN^O asMXWJk12K0nXZaob}U>BEsw[y9~q~MaN]*%fp6)Y3hCBbOb#WKygx2i-9C');
define('AUTH_SALT',        '/qOajE:*U6nymD9kQ`2JtQgup~sZ!~X]3-rkNK{~BBJ$k@uGgH_NHm7T@!^}^/oD');
define('SECURE_AUTH_SALT', '[nTSxW$rqVF-{S(_A:OT9}-AqAUhlxha(|slME}P;$Z$>L+Th2(+.{V}(4{W#4x*');
define('LOGGED_IN_SALT',   '[Gb6/nNUT+[K4-4vegdG5;[6HoCf:+3=-KYDV<Z||S=4zOo+O$vtnz#X=A1mH*8I');
define('NONCE_SALT',       'z|v vuW>nf[Jg<p]oJbl+~-7Zi:mQ8 eIPp!5yzRC&dBDAZ+,:=@+k@N$GW?kWgh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
