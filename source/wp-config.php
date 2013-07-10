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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i.D9!3H*G23bgN%.)-<u3M?GVDsWNAio[@_M(9n7::|Km4h ?IpeAON>&YD%3u%E');
define('SECURE_AUTH_KEY',  '*.WU;%wv>:?AD}if[W7*Ut%HG#9`7>~+S<xi(7@r|yI<Rv6=!k%44j@C_g>mxbmi');
define('LOGGED_IN_KEY',    '>wi4M6]CEqF:L:=7Qj?eO86N4jxia2g6Q$~i=/hs=1&FI%Mf/U3>0d7/J*Fj.g_k');
define('NONCE_KEY',        'unV7O#0*EWgdPvljis{dsRUK?OcsIHrq!/tXa:c!yF:R,$i|a>Ra=xX2RVjGbdn ');
define('AUTH_SALT',        'R{P!EJnRzY02[WQ66>eNn@vYLQ-gZcuS>:87!4,- -{PK7qMhZ91LDn6WT2F7pE(');
define('SECURE_AUTH_SALT', '2Hvv<imF;i*)b|r{>xC.3fs=L0Nk+A2O1<?l49 /$0B-nSxw;JEQ(cSc}l.TR|Ke');
define('LOGGED_IN_SALT',   ')AWkF?X-{nG1=8.AZe&<g _~>^jLa%QL<pZij}Zqod5&SP/Pt8ju&[K}eXK|40C!');
define('NONCE_SALT',       'sc7CrdJ!-%XfoNUK)Uv}sv!nGBbPFz;NP$=VbYOpM5e:imbU023-2K1MA7yr@GBe');

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
