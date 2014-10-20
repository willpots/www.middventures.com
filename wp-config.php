<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'NqjuufMyuA7VvQc7aPzx');

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
define('AUTH_KEY',         'Im%7(L~3wHFgrbi0d.3;}2s/mR-c5B]-|@0SWPDc9t.grvx;TZR&;IJ([ycC>`%6');
define('SECURE_AUTH_KEY',  'i/1TkvnT}X6ap4(GYcaP`N(g2M@7|dcvS>t|?VD8U.G_P]gn4+`D^)XJe,l VDhq');
define('LOGGED_IN_KEY',    'N$SP&zq-XlJC<EfdsL&D^xr4&bva.#u&]JS*r?y<g*6UtyUxH8O:/h~d)|![iPPE');
define('NONCE_KEY',        'K$t(Woh!-95h )Cl[V(gLt)cLN?~-}lnkG0[m)b|iXffPn%Xb-B8OoWBD}.!2pCX');
define('AUTH_SALT',        'b,`rX9.@UJ9#{pI$9kC>=ij}+j>W4GoIhaCo|Td|P1uYu0R ZZ|I-,80xMcZxz7)');
define('SECURE_AUTH_SALT', '>kOq$X8-T-6SGV`x@Q*_Q yM)[}.DrtC;0}KWHs? xUV%0CD<NGOyG|z)6fRKoVc');
define('LOGGED_IN_SALT',   'O-Pq@s^e(J^V1Z*VS,)t$|B+2[|z%f$#W`HAO,#-&g!]+.h@(TRkUm*{|FiLLnA(');
define('NONCE_SALT',       '-[5?ip1K-ORrFl+!<}-Gk]7KUf-|eDt/Mup+5xnaz1-0>F|*ie0m0^Z6=!R.n;T;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
