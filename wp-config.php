<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qubiql' );

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
define( 'AUTH_KEY',         '4MPDN_5yPJdD/69W^b@%))>^S?NW&_$!:>dcxjF 1/ w{n3 OOp<0nk@JT^_=Pmj' );
define( 'SECURE_AUTH_KEY',  'SJ1LD3,o0FfFUJ0l+;471Y|h1SgpF,%c G7Utx!d?^$^T@DDi]RckSMv_s-4L60H' );
define( 'LOGGED_IN_KEY',    'W7b4Ln]Mwf?VYNapn[kqs2wybOjIo|pk_l$&8r,qyS[!uD$gREC$(l8rk[u,aI=v' );
define( 'NONCE_KEY',        '7L-ydUZ{|L$sSRMDm<*Gx+Zh>l6<V1!)BP+a%_W+H09[ka],%UJVA<@vt#w8GSuP' );
define( 'AUTH_SALT',        '9;#.nd@cKRH;+5~q6uU=$oHLs7~9MQhj5(o~s}$.M>sr-,7TCod56*^jd3:sS}ze' );
define( 'SECURE_AUTH_SALT', '~X79I+<Pary]!`?9R=(]P?ZlfkYI}YFS80a`ZKw|5W]FMzK PW%1X8PJz7j<(Iq{' );
define( 'LOGGED_IN_SALT',   '=9CcV)KuS9M>Jsm(6N:x)V?Dm+t)h8,pWWm%gVjxq%63t>$C01f;daULeR[=7O=3' );
define( 'NONCE_SALT',       'o8p&P;2=0eC|U3{]3cst7OWSCwr;g4#+t+q5hLn^dD_S0.1[S:V)[UyeMi4^d0u!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
