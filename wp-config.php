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
define('DB_NAME', 'lads_guide_3');

/** MySQL database username */
define('DB_USER', 'ladsguide3');

/** MySQL database password */
define('DB_PASSWORD', 'SS!?i4Xu');

/** MySQL hostname */
define('DB_HOST', 'mysql.lads.guide');

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
define('AUTH_KEY',         'eC)Ul1NxHojg?R*i$Uo%iCSIZI!B&wF1+Ox`dN@k%hMh5YWF)0K7wpeqFVbf?I0v');
define('SECURE_AUTH_KEY',  'P|WC*8up(;PRMyNp/a~ltcril|D@e0cRj~)9nNxnU&EvV9j;_tFWKE3PZ2YJ(Lr0');
define('LOGGED_IN_KEY',    '_i/C58dNkB4+qGc0gVXd+L:^^CE0Z$02D6F^ve|?TFGT?ukOTxqN0gf(00s0CxJ"');
define('NONCE_KEY',        '?f|*CSEh;ij$vdnET(+rl~IF46f@2p:ej6DBp3n!S3u#Z*R|W9ZQpw@:cRPLhp"b');
define('AUTH_SALT',        '26^sB"o&mt:#m&ALnHXHfKY4LVAt;JpekNXVjZki^z_#WLj)C(f?|TI62@cRBKbT');
define('SECURE_AUTH_SALT', '#oS$N*:zJ4kLc;"r$rkbF`96f_tE^rtgkIyWs$yTR5ZucWG_xm|Rtt+MhAhXu$Qb');
define('LOGGED_IN_SALT',   '/(ozJ8i)T6mof8ymLt%FzwQXdIKLow);7+kj`PlD)jT`R!$6XP!c^dYGGLQbXvhg');
define('NONCE_SALT',       'hs/S"exxw%CJ9s#"6"ej!7kgP!io6VI*9/tJf_h3v;H:d"j#^$Vr7pq0yP&g0a_c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3tavs8_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  2);

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
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

