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
define( 'DB_NAME', 'nzaffqqo_wp838' );

/** MySQL database username */
define( 'DB_USER', 'nzaffqqo_wp838' );

/** MySQL database password */
define( 'DB_PASSWORD', '6SlLP]]!p851[5' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '12mct6xjaitftxjpvxrxwyy9n4khpfa4moar6ac8hwll3ogvhir5surf0182jxci' );
define( 'SECURE_AUTH_KEY',  'yi3j8vv1ckwpcgkxrveu21r9rglnazuy4e99r1c9viapkctuxk1qg8zmqcyx8zf5' );
define( 'LOGGED_IN_KEY',    '4abnmqzelqxw0icgqaljs5ac2r2zzkhvqbvhrsu3erav0va2p3rnluvmguu1lmed' );
define( 'NONCE_KEY',        'mqhikea0yuqccrnzexh3w1obccp56ii2vrx3sevjpfplz2vbsgrmeeym3w8sueff' );
define( 'AUTH_SALT',        '8lzoksabcj8cfjn5c2ypf9x8koyolna6dtux2wbb7jbqvkflsmk5mjccille585k' );
define( 'SECURE_AUTH_SALT', 'szloqdmver2uzom9kfybhswobbbsauq2rvyrhp12rvw78x5vuztgyikqbeuwhdto' );
define( 'LOGGED_IN_SALT',   'ohuzzzfcucgnpb6a93u0eoczwaoigmvp0jkze83wkuts5fws9m3drrxnjatxhnra' );
define( 'NONCE_SALT',       'tuegcrfddw8skgpfm6plksij3to4ii58oyjbusk5vdwbl4cg5abd2swzjzv5opz7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdg_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
