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
define('DB_NAME', 'baabejibraeel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=9iA^FXHt)=RD]T}2K^WRjW`pfD?d7<a#)t6ep7`p6^c|0CS`>IbZ:G^#QuK%Svc');
define('SECURE_AUTH_KEY',  '/F4^<5N#z>(yN._#Oht#MC7-[ g4m2e`Z4lSJHRie0>{9>;uLu]fx%C%9NiS9xi~');
define('LOGGED_IN_KEY',    '5 _|&Uja]Af~+!1_W88@H6b_Ta}wB`>J=X{Rv{}OKmQVAA$nP5bu8OeabZ6cJ~Me');
define('NONCE_KEY',        'K&<GHuij%3J%f>/0MG?A-;8|E:DD/rDnXR6~U+j11*h+(dIa536Db :@6NEA6%IY');
define('AUTH_SALT',        't`=elG|9W3m->&us_0x0}zcAr^% ]*iTfK>0s4UB2=j|$V:mT3,Mk9Su z+VCuSH');
define('SECURE_AUTH_SALT', 'a&?LktfqzkP`x!VZ3N|e1GOhhXt!pC)w5vXb+aI#8<(?^=ZM#c^)&W?Y$x5:Bq_)');
define('LOGGED_IN_SALT',   ' jJny!PLzMCyAw`Hx`%28TR`;$*A({L2Z#6_0U6K3#<Xk&Je|(&0d{QrwZKxWM*N');
define('NONCE_SALT',       'Syg@.(Aa;xpbq [++vi*+9&VBaym!(4Y^-/HC+QS7h_F5RW!`G^R{]eo`UIWxw(6');

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
