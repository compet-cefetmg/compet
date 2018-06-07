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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '06973199');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '256M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7WY2%(h)Z<]OMv}u_E?#s6FE!|Z(nDzs2_CwZ32n;YHfA^iF&a`{$~F>PEV*6Qmt');
define('SECURE_AUTH_KEY',  '$*WQ0)[!g91<5(TIm4M%9)6_V9+i2%wW/pu;fYTR&@nQ/wb@8qzd<N)nLAHVQy L');
define('LOGGED_IN_KEY',    'Wg3 $/bhdfCmL+GD#-h~ek /tlYYtOYYlcYfRrM)W4p~0!RMvN+=a})&sKln.JLs');
define('NONCE_KEY',        'N)u{S(<W.GXaOLiHtk5v1gkO4JRww,4^* DI?M]Y}igz|;EH8;8tUv.lK!;:&:Lc');
define('AUTH_SALT',        'F`k1</bD47<Ll_fKTs/Zx/]-8blzKkt 6w.@PyB6uTA1yEdx1nre*LT<$4QbeZ;e');
define('SECURE_AUTH_SALT', 'j^lQk rznEedL<e~M$OwK/M/{Rd8ZC!v-w+po?1#I/S#LA4ti#nxZ/7j[)4=aXwI');
define('LOGGED_IN_SALT',   'J@x(N?=1wB,P,*i=N..N+2[Msm#59u~jF>!JJjKme2!{L!JDyG5+a+AD#?M7)k_X');
define('NONCE_SALT',       '7`dx`< Xaz(-xmHa:8}}A_xNipU,}A7[uy&_7Ab?L]w2EJiwZ#nU!Qm)sm6`E03~');

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
