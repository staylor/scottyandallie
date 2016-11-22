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

//define('WP_CACHE', true);
define('WP_POST_REVISIONS', false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scottyandallie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mypassword');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Y{GN^jv?$1t&;-S!%1**Y|[>55RIS}+dEUBgMu(.)hb|$5dJ)-YcIycqIo58V');
define('SECURE_AUTH_KEY',  'h~UHgLgBS|]I^YR)WxOr!CM LP{mBn5YF;7QlNCRQ Xg9Rgr faetUIR>c,<#]');
define('LOGGED_IN_KEY',    ')88u^+E -||!Pu05u8h{*FnpFEiWS]-^VEK()h].* UT+LwMxdcy7(ykLH|0Fz');
define('NONCE_KEY',        '(QOT-(vA 23+uW1brC}&C,&Iw}H/1(J7ey]_CgAFof}c)| DRV+VF(CODYzzS0');
define('AUTH_SALT',        '[[{Z--AS20uPjf8Xi.3I-Bk;NLo8Pq-O}K%>Kc+of9]xvJxGneM+M{Ed5cgSGt');
define('SECURE_AUTH_SALT', 'GWmz4Ld:|,<2Hcl0y(lVfRUVu]r|M>xLJiYE,1-sgA^*__dZ<|,NXv*r7XHkd{');
define('LOGGED_IN_SALT',   'FY;->[c++|Ep:.-r#0YGP6!-q>C:FL$)#Pt}J1)&WH:%QX+p(H10<7tX4SI7WR');
define('NONCE_SALT',       '|!3oK.Avi4XO6.&iyaQ75_-W qxEONorlX4+@e!dkL-gmiuAJQJ- [K2Rxv~j^');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
error_reporting( -1 );
define('WP_DEBUG', true);

define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
