<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'progammer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4}V &J4>:aM)nm`Vk]M1vc~`f%BLqE4>gPp/sLPq>z_IYoIbR`&6f4#@H#Js@Cf(' );
define( 'SECURE_AUTH_KEY',  'Dr[ILD7n%tj!u@Dzgl[o* f@Huz#gKJ+ 8%<i5(Y,Jm%[$nsl]-yIx`Vo~auZd!+' );
define( 'LOGGED_IN_KEY',    '/YD*QfG6a:+e6ptxTy8O.N:[crw 5}CkrlKLr<%8$%?~:$Ua!T$-l^>iZNKt/HjO' );
define( 'NONCE_KEY',        'K}BF+J3y3$^0HLzNJQN97d={s >{z>9}Fk[/MY-[=o~a/4vVj4E5qY/(i;W3[L/z' );
define( 'AUTH_SALT',        'TM!T{E:N|U#JIENAz$2{S?A3phJZIpQJg,o2cuEAJe(9Q/^yDy2klj2f]>7Kl<N6' );
define( 'SECURE_AUTH_SALT', 'rnGGc6ksAi1};,OnN-d-Q RbK#p2;XDAZ!%;tL}5 &4+O-nGS5Ha :5P,m98]~yC' );
define( 'LOGGED_IN_SALT',   '?dfv98OI`B>d9c8}kKB! |hvxwm?5?T:P4GZ^t]{0Bqou4ZI3 2+fTs%w{fwHl0M' );
define( 'NONCE_SALT',       ':{C<I?.0Kx*@~ocUgX+c`8`C&l[u1M<6=`{OS*39i[W|Qxw$!6Ahg]h;KSkmKGsi' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
