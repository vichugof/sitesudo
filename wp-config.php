<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sudo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hola123');

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
define('AUTH_KEY',         'p%4#~Y]{-f63m&/#-E2Ooi7)p85<$;]DJQc/YCF:dMHWnXQ?=zdePdNia}qmB|(d');
define('SECURE_AUTH_KEY',  '1dj7xYMRq+xQ|R&{3UMDA1^tVjWCPHp?l:VfN)-Zd,yo}/sn[.CB2W=1(f|lr8;a');
define('LOGGED_IN_KEY',    'k>G-=!U dcvM?xW1SierF-lzoywy1Df6GtOT5Xwyy@UxRj<QRzXV=g?V/^Y[//-j');
define('NONCE_KEY',        'rKLA!^@:0]4_56:KDsZK :jC1ds?e!fr0JnRs`qy6&::Z,fdE>rtrP|VD=,el2^V');
define('AUTH_SALT',        '6G)UxA3&i*@_:IBWw9AoJ[EuTs,iBf7~!L0V((Dd:>~CkMP3e:}O{lbNw/uY:$b{');
define('SECURE_AUTH_SALT', 'j7]|VK%#0vK#z}s~VUj51T/etW<_jx7nPHO7hTrK%oI{@BLI HWaE)Jfywhr`d&e');
define('LOGGED_IN_SALT',   'RKFf3S]*M}rEtMjt()eqj!k~wN;S1Rf,pCI*Xw@{lr6JYSLRd{%x)#d/j(V}f6?+');
define('NONCE_SALT',       '{wX=TG+t$:334s(e+~5>zO(/qsC}MZ#,c};00W=}E%[#&4oI-RVbD3x/8_FY,2|B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
\define('WP_DEBUG', TRUE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
