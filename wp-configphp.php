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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '.qxJ{(d<@OpK,RZ/|~=bVnZSA~@1wqeiD!osA[+`2%/smqg`UessF%R8?Rq:j+CE' );
define( 'SECURE_AUTH_KEY',  '2{8C6g0_z>[sSxc*~hGZ/-/bQB-V8K-FA)(:WjFMl<C{8RhXLcq%`+tqt J/qBi6' );
define( 'LOGGED_IN_KEY',    'I(NW|[S/U=9wO$PZs8s#nKA6S0efK!obomx7eg-J+)p:d6;=Ar&$39szv76)W;3V' );
define( 'NONCE_KEY',        '|P,!iVVfGu{kacOlh@Q+a).Z~+H?,4PZMBnCVG9Qo3iNRhWiLrLx(~Yb+B>mYv|t' );
define( 'AUTH_SALT',         '3Rz4$V*N+BY8C*ce]{i;X3)DlXobJ$h|Ge@of|^G8`gLxzrjNWTP~?> |_JX@,|-' );
define( 'SECURE_AUTH_SALT',  '3Rz4$V*N+BY8C*ce]{i;X3)DlXobJ$h|Ge@of|^G8`gLxzrjNWTP~?> |_JX@,|-' );
define( 'LOGGED_IN_SALT',   'GB@yMn]+`ObL5:M=q{!vcHd9$:#6j|IbK3>iI#rUEwU3Ht40;g5]SWOtg+;S $G~' );
define( 'NONCE_SALT',       '7uO%E:4=PDuw8.{6Mg!yV+^++q +M[y4#_B.Ion+J?}6( MZ@4MZE;ufio&d]k)y'  );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix_';

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
define( 'WP_DEBUG', True );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
