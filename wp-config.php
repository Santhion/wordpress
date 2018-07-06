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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\crst.net\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DMz,Rxg`i%}QA{%cYLYr,C]YW%H`BYN%NA_%j0ocWWxZO[>fawCn@9s?fM#SOFy#');
define('SECURE_AUTH_KEY',  'Y(FT:{DDWt/;{I+4MTBC*Ya=C9GXQ%4C.F>(n]%],Pb90UKe!Vl%J/F[jC&ck46q');
define('LOGGED_IN_KEY',    '!?ECIL$mrHCX%YuO;ZJH+z@lxd?WaEtZ#3_4XkX/w3SySYIT/F$_x,XL&>7mDR<C');
define('NONCE_KEY',        '%>#&m:iwD)e0)d5T[v6n*`~.X4~96LcMA(uBgasRYiK?G$^cyS1)-_OePA/_;{Ng');
define('AUTH_SALT',        'GzBmvjbQ =Wc:qHNx,Su}`T4U4 q}z<&+?=d,G5.?v~>@)b,M@tDA`U/_BvLDF4u');
define('SECURE_AUTH_SALT', '&Hw@2SUGV K(dGpPK0oo3O7,NlXw#yfE^BQMlFaHo>5E[EF bN7XFI)UHaMMV*yq');
define('LOGGED_IN_SALT',   'pzJLjA?xv>lu/3]y=#EAz-kMMSh7V5KdA>br5!|%>icG{~[d,&7eiuigh~Ty%M=|');
define('NONCE_SALT',       '5cNu1zOrR;?n6bw%u+;yA?dHgamSn|tpb$Ad[`E2bZ|:(Yul1%2_=K:#_skgb5z~');

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
define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
