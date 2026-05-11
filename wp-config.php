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
define( 'DB_NAME', '659156ry' );

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
define( 'AUTH_KEY',         'r<DTbG*rskqqQL.X8h]/RTcvr~II=+Yn4+.`BGTgO5J$X3X?_e!ctRr|sz jlxnC' );
define( 'SECURE_AUTH_KEY',  '&2CJhQyaX=]{q;}Y*jbY7Ucf*kL&ir/t?A87e/hloq33*}<yMhB)!#x.$XYA!:`^' );
define( 'LOGGED_IN_KEY',    '<<@F*QmwH2Gm@?lw3ibb!U@jIatj#S,_:,9q:s_ADj+|F^!o<R(6@y3bi?u(21pP' );
define( 'NONCE_KEY',        'mQYxOJ:/OOepuG/P%pre7nS2%<N}v >]#8(h:^g9;g~~||@OO I85xv)dVVVZE55' );
define( 'AUTH_SALT',        ' p$oO#P[;e#63W!8~C-`bGKa(R*?*3ukR!bpI,U1?aFK}uH6I@9B,X&$#|Q;gd~g' );
define( 'SECURE_AUTH_SALT', 'j{ywsTEv!<>xGb7Bgg2AH;BLDO7x_zn1>|mVK{zp*)B5W5I9wq4m/n#T=HX]E80L' );
define( 'LOGGED_IN_SALT',   'nj?ikjWSg1kUXMwj++iR64VWt~Q>:M=I?M97 YG! =tjshE1&TxyB/;FX}?,4#fO' );
define( 'NONCE_SALT',       'v4VEtJ17?>BB>iQzI@(3YAm/0tBpmLcBC_u~;d9H#vaEhvJs5<IzV!JSZ&Zex4O`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
