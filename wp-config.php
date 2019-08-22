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
define( 'DB_NAME', 'pruebaXigna' );

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
define( 'AUTH_KEY',         'Dj<Cup,uEC*b[$W%GAjz~!B(_8,Z;SfN~O?vh%771<w?&k_;4gJ{+$27aA|DMrsd' );
define( 'SECURE_AUTH_KEY',  '=IPvGY<K;s.MHBPy##? a^.QR-?Lq=0(=3z%p7bY<`J)^h+M;eZ3<jp,O*z2khxq' );
define( 'LOGGED_IN_KEY',    'YO[v&2?!V~7~k1h_;:Q-7V@T0i,wGd4|qVa_d6FIB`f/u[ur+o1,.~RNiEZm}k+?' );
define( 'NONCE_KEY',        'hB_}mW>/j@e3@aXS ?]?xcT-4oYt`*@fo$Oi~aFsVme6ps*3>MAV,i7I5+Bdn,Mi' );
define( 'AUTH_SALT',        'aG[X-,eNz*#(Jm55s?Pwz@Kfjy,Y=;m)#d%w},_#Tr0$^0v$j1ewL3d+Sr5OA1.E' );
define( 'SECURE_AUTH_SALT', 'cN,MI,| *I=ieA;naxlzf?o`O)&9OS]0rLn^9?1)^-pK#gLe@jBh>=6V}8q|O*5_' );
define( 'LOGGED_IN_SALT',   '4^G:Vd3X&#-+F<Q`9U{J{S@##Sf>Z%&f&9g,j*X1Vv@3p-`$$r#0HvQj^0.j0]hC' );
define( 'NONCE_SALT',       'p49zLe%_dd n[mxOS6-NEq/9PS_DTIbPSI1PVXGL B2%<rl+-+nY{&LJ3W=Nn2,.' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
