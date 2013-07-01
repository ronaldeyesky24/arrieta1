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
define('DB_NAME', 'ronaldsdt_arrieta');

/** MySQL database username */
define('DB_USER', 'ronaldsdt_kike');

/** MySQL database password */
define('DB_PASSWORD', '123abcd');

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
define('AUTH_KEY',         '?hT_&9)4WIUS B)ZkyLlJe3rd}-Ll^|^+L8~>dC3/;Pj$@)Z)tuyYI 3-tjn[f9h');
define('SECURE_AUTH_KEY',  '#B#l9ACH=A;wjg Zj<:#L*Y+r0_|5*Ff< aTvLtYpRzcn@`Nz6#,9?7Hma&@LSR%');
define('LOGGED_IN_KEY',    'Rn4^B|?NW}@*HdLo[h%p[Q.,c=r]9nl|oEP:Pi3>z4%dMMVJ808lV0sy#Z)@Ie{t');
define('NONCE_KEY',        'Gjj6B8vUh.^~-;Eruhda>Y-A^MiUmr8iM[~JXRJ!6(s.d%ogV~|-{z@2V=->0zp6');
define('AUTH_SALT',        '/(`S:M:de.Ye|=ZUAW)Ymm05(:|<Ys1g@0xs|6@wqJ5c):fCf:=x)-!Iu[3l[D-C');
define('SECURE_AUTH_SALT', 'eMw<!Y+0Qc^O}P/Kod~s0llP7yn{*uVTcky9BFE)w]cHMaFrCTtey*[yY.pCzPk%');
define('LOGGED_IN_SALT',   'GT_Q><t#T-xL; F!`ojQ+I8q.E-f-h;?5r1*SP>56o{x%]LIdoe-v=>5fV#A>SPu');
define('NONCE_SALT',       'F49r5{[EEP^+9C!<VE>*S+6*mKBpMD_{@y?)%-pT@(tW;l|@WeUFZeQl3A50EX5&');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

