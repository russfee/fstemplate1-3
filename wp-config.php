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
define('DB_NAME', 'fstemplate1-3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm~n.d9GOdDo QrcvTuaA{Aw]-npbevT{PN*t`w/A3X#s8oGs72U.J9%2+PJ4&O1o');
define('SECURE_AUTH_KEY',  '5#bdidv9IC UB&u@eDG2DT~@LgIJJ~ FCE<Ya3b|-1=U&r2d[Raf|lnb=P1A$RV ');
define('LOGGED_IN_KEY',    '} zdG$I=:nnsh[nhtPSZ4&p#rMfl=^98a8)(7;i8WWpnkr/}HPqVpSv+YW$+?4];');
define('NONCE_KEY',        'W$G)m6r]l}WDEqokdd^-LTM#CXM7X^^vfjigkHUD]A$b>m0IDL.S%q*A!>rvB4&`');
define('AUTH_SALT',        '%}qj(V@y>9u7m*uHYx!f2wO46[jvMQ73EYazEG$ysj%6<dn e53?)YD>A#G--gI.');
define('SECURE_AUTH_SALT', 'x|N2V6*qD`fPLG&=K}.@4:&=!Q{&WAKkUgUfU]-._D^H~RFZKDvjHmZ-bKX^B/y>');
define('LOGGED_IN_SALT',   '^>FK$jp9t2]Glv[6GrCp,aEm|lvtkW5J,(hc`jq8w[xbW&0NEYzT RPXU{X ~/g1');
define('NONCE_SALT',       '6z[iO1M`<H72&k<1}#-4,srTIizzT;Uk3+L!Qp/M[QazfajaMH:lB[y80ueKLlt;');

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
