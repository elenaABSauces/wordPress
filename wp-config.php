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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WORDPRESS' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@ssw0rd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')g1r?3)GYL)TC{d>~$bNN/b|J!wz|L9k0znx mVkTIS(^$[vm,bnbM>nGH_Bd,@S' );
define( 'SECURE_AUTH_KEY',  'aJ2_)r*Z_A3^C9UE-_t,UAeg)SH[]Xea{_kS6Q|5b|?]5`1wV8dwq3#0I<!)H>U.' );
define( 'LOGGED_IN_KEY',    'R9Q@HKHYYUl(MkQ ~KYSpMGC7nq?hf50s`y*{jT&X,$j#A6GtYdG_pfJMOI|soO=' );
define( 'NONCE_KEY',        'Gf 01Hsbw/KpvR8.x)V>Qf>C89<Ai,$q,}+djC-3N%=qa0>v[`$FCO fx=4~YduL' );
define( 'AUTH_SALT',        'Ii4W;a63MQ%qtlo]rK8>>%ac [gpJo*&v:Je8M9[Y<6/a~VIhnDZTHyaYrOtTz~U' );
define( 'SECURE_AUTH_SALT', '%Lo4V]zt>O@h*C_{)/$eX3U`.&+j,-$8a-$$}gHUO2}wHR.LF_GKtA?wy(:27cCJ' );
define( 'LOGGED_IN_SALT',   'OU8D^].M~Ti@h[g92[s-qE1J,`~K)EvLuA(8gN{T{4+,c6&$l:fT{m.|~96180;v' );
define( 'NONCE_SALT',       '9]5he%2ICEd896J4rS,}j=e!{Ta_)5Ucbt]fpG~Lc l2z0{63LBCL<P!DF8S6Fc^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
