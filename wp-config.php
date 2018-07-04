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
define('DB_NAME', 'coolmat');

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
define('AUTH_KEY',         'a(IoggWrn>= U*fXnI&9?(4#|PUP?syU%fP+vz?bp;pd.y,,H$H6?@UCX$jLZm C');
define('SECURE_AUTH_KEY',  '{}]Mcj{VCLDihS1W>Ez0kdn~|D{9nexm-{CUC6e-/}qOwCK%%KdKZ]uS 1:FKH.X');
define('LOGGED_IN_KEY',    'Ly.J1aq3T2LtS=oMhN4~wFxcl&0K3&6@[8ph{=;w+o|*6oajyo3HxlZ#}PvFR4*z');
define('NONCE_KEY',        '~nI#D1^Uib7PkARzG&fsq9C6P3M*fcS@V#Laj_j?Ew;>DC4dSvXg&SyzYHQh;Z(d');
define('AUTH_SALT',        'l0=r}&^>3tGR],CuF%=7_v>-h_K=RJ4ZO0Yss,|2q89[RXuaCL8L:[Crw2+Qs],?');
define('SECURE_AUTH_SALT', 'Netv8]|+eI$!&a%Lbz5d9PAG2:=/+S,w!2Uc}QdB#FC8jr;EeZrTVlk)UW)Zlb[s');
define('LOGGED_IN_SALT',   'eax~?Q~&T/F3n/_!lC#;y5[u=Yt-_?>(602UcdbWCAfI,X,ap1B0RP{?A,)5UVo7');
define('NONCE_SALT',       '[@/yg~f6&gp-3`DROBeTn&An?)rXd*as`qg03,Px!_^^gbQ-kWJ*F%6SA~$ BQx#');

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
