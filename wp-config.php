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
define('DB_NAME', 'ronald_arrieta');

/** MySQL database username */
define('DB_USER', 'ronald_kike');

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
define('AUTH_KEY',         'u>@MB.]qhGNp[Q)k86V&EF;S{%)fhTroPNUn}v]sk}f@RgYL=0HN>vwax!GlJ9pp');
define('SECURE_AUTH_KEY',  'Y6#5zp5ppy`ty}mftn;{8u 5-BL(Z*IBH87>t;dhCWIi>B7<`!;}xf_c>I8ca7?q');
define('LOGGED_IN_KEY',    'H7tE*;Gi5DX2eO4^~~]<[%MNpy=^py8GZ-`}Va=nS0C!c%Ta_]bt)W(4A.YWq:2d');
define('NONCE_KEY',        'p>(WEinl9>y());.JG5iqN]sH3]|Qutxf|xu 2%WT8c(@3[LNF5;$XI<|}$-7j=2');
define('AUTH_SALT',        'H]Wvo8uB e(@d_,MPQ/q(*8$3K$$mCDED43b]ODKa$>=228+eWF=,0R+$w>C1/:q');
define('SECURE_AUTH_SALT', 'lItai*@N4Cu.ED@+Sv0;u.l=dZi^in5]IQy=;Ig+vLx%Lo^3{KasuA0M=DdyY3V_');
define('LOGGED_IN_SALT',   '9WC@o3rPXgn7AlFv:oJ~WJn1e@0FF2^qshy[2jU6>Sc&YGY,7`tm!R+Qmei~+/fR');
define('NONCE_SALT',       'f8xm+(#Tl|3AY_YeWU<=FfD,xx<LK8_?O>KX;)&vM3YN4kot=R+q*WRz!y8_!Ew`');

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

