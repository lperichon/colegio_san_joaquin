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

if (isset($_SERVER["CLEARDB_DATABASE_URL"])) {
 $db = parse_url($_SERVER["CLEARDB_DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 /** The name of the database for WordPress */
 define('DB_NAME', 'wp_sanjoaquin');

 /** MySQL database username */
 define('DB_USER', 'wp_sanjoaquin');

 /** MySQL database password */
 define('DB_PASSWORD', 'password');

 /** MySQL hostname */
 define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '19&oCPnKd5+%+#d])aWJSD0=q^1G@B,+o*:=Ds^Y#$*h+OlUO2r?Id(}>8Ep||5K');
define('SECURE_AUTH_KEY',  'qUK1]Tc(`WNbRnv|$m]n,)3Y(HeQ.Gi%Oo!*b^?hPHR A/iM_bL&S;2T[pAHJdL[');
define('LOGGED_IN_KEY',    '6NKn5lYvM.O@R)6HM6S/$NH6rqT@avXz<=tA6-+g1b,;|OIBFsraWK&Y1KvK_WXb');
define('NONCE_KEY',        '~u](uwX+s^LGepT&?DB_+d_.4A{b+]e+z3=YQp `f]Ff/6tAGjp$@9t [.43Mgnj');
define('AUTH_SALT',        '~+ X_;!>5@=}03<2s}K+;~rvM wV]dkQ0ReT5QiEaB|~c2Mz4^|jnU4Hx|4c=-qF');
define('SECURE_AUTH_SALT', 'y J+q-lcL)MMXxm{&na)qbk>(?i|U5sVm|d}Z%!y,e=D#.|<w?/v29(e@D-x_86]');
define('LOGGED_IN_SALT',   'OTG^NbWl|eEF_b5O8q}:$wqZ#3ngDadM%Ec2{$<=cq|Z:)!L9qeps3UM49ViMdOh');
define('NONCE_SALT',       '@Q#5%bag6`kKpwG{ 6PcpPn00s&g- $[QC%S{O!dd`GbSL{Pm/AAdDwutKo?aiK&');

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
define('WPLANG', 'es_AR');

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
