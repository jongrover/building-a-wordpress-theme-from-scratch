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
define('DB_NAME', 'wp_dev_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
 define('AUTH_KEY',         '?ype}K|2T%4P2b(<Z=(271&w^(@6A>(&)H.M3GCM6-E(|+N/+1/kWU7ok6vi$X/G');
 define('SECURE_AUTH_KEY',  '8M9{G{/$8~H+2T{l!/+1hHX+c|-9Qah#38E|j=j-[6+n#D.~~8&MN@e7Jf-4sb>V');
 define('LOGGED_IN_KEY',    '!(GIf1%3&]99I.2SEy;K7<a2>?9?s?7.3;#0q|~`.c:T<^_9%`U+K*lC@+^5hX&f');
 define('NONCE_KEY',        'qo1Q 9 kloC|?EG<[$E5LrHq6O|9ThnFlvF(5f!|C|Zq;z<H1m_5zQD$?=tK!>!M');
 define('AUTH_SALT',        'izU:+@orr*<BBkK]rCj%MWKj<h7>9$yZ)B0KPdr|<EB%k5(agG$Pt1$>#qzv)t2x');
 define('SECURE_AUTH_SALT', 'U83PD~K0}X3?%N/2J?YvAmO[`^5%U+#<d^F7s?$M#wPU=Pq!|Mu|u8G9fSXZO6RJ');
 define('LOGGED_IN_SALT',   ' ZK-0@$}nli4NMkd#-Jo(aH|!g7eZ.CAigmeSXx|Q.f,uZ>A(j$[t]v37;3=J.s|');
 define('NONCE_SALT',       'J^)o+<1d{-[/B0`$9tnpMl;d-N3D.-t!H|.9U=TO$@u:h9SR+ZWrJZZ%~_<=+eb|');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
