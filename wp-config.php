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
define('DB_NAME', 'lisanestico');

/** MySQL database username */
define('DB_USER', 'lisa');

/** MySQL database password */
define('DB_PASSWORD', '081219860');

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
define('AUTH_KEY',         '_eYx%duq9GhGI$u+s*jwfYkux/42dL?s+`<sr& (Rdil]d2-lBB :OAj)UXx01Oa');
define('SECURE_AUTH_KEY',  '@lJth/j4<|d2vTJL z{$CnmY%Mo@(!DNbfb!LZKZhghz(g+t<M&uNlU0tDz%}#]/');
define('LOGGED_IN_KEY',    ',I}a 5Sxa_R|$nbXXGuNh%-)rSj)+F,e!#OdlA/2_Sm,L7JAy@63ae??z6^^GXV~');
define('NONCE_KEY',        '~cmq1iY*0zJsN5 <pnogOa?c[K4o:58au>/<>^Z&>pMF7/WXXcHhHB>x`+rech.g');
define('AUTH_SALT',        '9[]94AP[#.aWF0|9_FXZ>@):yTIeBaVk^v{i2ZH`R0{#04guZB%foP~&%u^`?fo<');
define('SECURE_AUTH_SALT', 'el5}``OjOvVUJ Rb0l_6y4F-wc_tcOF{XOA/QfYQXfM|co*ejP}b+3^.`6A6L7X;');
define('LOGGED_IN_SALT',   'r+ouU$w0|G`H ruA/Pm+V_K2l)}|A_R- #*/z/|.`,{QaCy)poI*<#YGIaHD`+XS');
define('NONCE_SALT',       'SX4(|PqE/)LX)o%/VUAJ^IYO:0S*q#JD?%Dv;pu`R v7j~|f[9>Pi#leSbWR5j6~');

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
