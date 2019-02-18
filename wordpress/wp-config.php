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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', '@Huy280895!@#');

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
define('AUTH_KEY',         '>paUdI+ v>:|Wuy*CeC+RyY3srN;El(?%>)1.uN498cO3njs?i/o lVq6/SzyNFh');
define('SECURE_AUTH_KEY',  '*7m^69Mj:Td<,jrME;d$jqHW/TMx4X1+h^`RJO6JF_=+#-X}jOlLT5&Gc?#6gy 6');
define('LOGGED_IN_KEY',    'Cif&wPSi)0u|HFNA=x+j>[%fJ31BZ:M:Q@++z+0gL@oz8X#2|:]TfP#{_gjJw+:L');
define('NONCE_KEY',        'yno)5:8*rdU?^FDSV#9c|f7jC+zoV+`-q4D9tK)(p:WaRsU!JHy,:@kM<Y<(-kqT');
define('AUTH_SALT',        'b-+i8w+)@+aU<`HqQgt0YOqgaYlGriN/s^ZoDzOlru0]8a0{zT@EJK-.9wJpw%7~');
define('SECURE_AUTH_SALT', 'N+5I)eSDz|:UC$]0`[a5|*Ej0_)U5Sh}g$|HPP3_1d@ST7KRei+/nJ9e|tDOn#`1');
define('LOGGED_IN_SALT',   '=]*t:O%CZ&J]O,&bm_@J~55`((Tn!xQI7hsy&y!:TW(|uRB4X(U^6YD05.iT8ev(');
define('NONCE_SALT',       'euuzE*.i{@JkWS9Qig|=P&xLI}RZ.B+qF+8~|vpu?$<%$@!d10BEMKB#bjp;ZG&=');

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
