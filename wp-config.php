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
define( 'DB_NAME', 'alura' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'a)i4;*]?26-{?EK~3Mh84HJSL3W+#$pv<LU{AubmFCyLvF4>%^F~t0[[&Ggn;zXP' );
define( 'SECURE_AUTH_KEY',  'EX[_(-~3E%Lvu+Y0X<^_WWna.c~h/UEk&IUq{v5gr%]p:2*+};AcO=Oc_Ooftqn?' );
define( 'LOGGED_IN_KEY',    'U%8.YVSg{c/l#`)?5(KQuOBlNQ2xLn84Qt,5~u8H!uoGSp~85#GCnWuQts7(1Q^O' );
define( 'NONCE_KEY',        'jt{R0a7P?0zN^%C=@i8F$$ITT90hE[Fd|=B[0Q=Ofa<.Fd,#?(&:^lnT9oCz0Jdj' );
define( 'AUTH_SALT',        'rT10VtMBM{!dTEt}_-En%qI_xnUO;;  tU^bafU@UFAI$FwEaYHt+.t.IqKlG>FZ' );
define( 'SECURE_AUTH_SALT', 'Kk@A$l=6e~iX$lqC}Lbb2VTMt70Lt<}piMR@;$$5VXME.8GgFvgxmU{qEVXwO985' );
define( 'LOGGED_IN_SALT',   'rvYQ}E-q?5}^vbq.:7ZOI{(<~C}o[8bdE3^[u)kkp~Y-vzhk$L[JXal][S;f2a5T' );
define( 'NONCE_SALT',       '{wZ:!r^^zZ0x=vta^xg?+2)5L#i}m[&vHk:AJw%,Rl@=tARXu=j*|x17?JmK*?YE' );

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
