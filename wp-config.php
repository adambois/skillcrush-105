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
define('DB_NAME', 'wp_1');

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
define('AUTH_KEY',         'q~}0T+wN=<b0D$I&R9w|TR#NL;Yv|tbbz/)c4,/WJf<7,WcK1G+/c9f4gJ,eDtc-');
define('SECURE_AUTH_KEY',  'POT)PMU TRJYqGjNlyyK=3G(BtV94T.&:10mFz6]|oaRO&QsZm%|.A6JD6w/FD?L');
define('LOGGED_IN_KEY',    ';+=RmFrxpDW;)phFX!%eUZlWwenj~XbKKa)&gW<hh*dA2y|[ql56NV!Jy>[qOI5{');
define('NONCE_KEY',        't|Ar`l:%9ah~HJFY`h)<YPGO+{[bE<?M([38{h8lse3?;c)IN6]4v^[}d0*lvhQ,');
define('AUTH_SALT',        '*?dIn88+bt*Ggx4tr|pa)poxm8~?!Lq:rGD+b$TO}D6_3//-G=dS*%0O-nQsx)JX');
define('SECURE_AUTH_SALT', 'mc3RZe=>_QlHkUMUhc-o,nh`7uZ/kD=%.^uL<!^MS.%5B71!:K(ttUFl.&ig%0Bp');
define('LOGGED_IN_SALT',   'q&TJ7m5}3^^l1xuH0@h!Yw=O(upiJ 0v.evbLPJW*fpgTw:E^z/,i!).I!n7Oe=W');
define('NONCE_SALT',       'Zrdt,Mo!p x~5]Q@pJVc1<rP0SSW}O,Y@Q.KZp_rE+L[$0t`miq*^I27JC?XoijK');

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
