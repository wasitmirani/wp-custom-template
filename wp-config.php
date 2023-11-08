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
define( 'DB_NAME', 'virtuaalistailaus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '5Yguq4tEGHT9yajl7ZCmp7jsctvLcWbSUejuPwknzSfCdf5kLktOX0RAi4nOjPgf' );
define( 'SECURE_AUTH_KEY',  'hNPF9Rn4YEeaIv3RKySp76HkAS4WtzHFTSabMzJ0944140ATqHD5Fyf5JvSzc79K' );
define( 'LOGGED_IN_KEY',    'KHb0g04pZR9ToB0ozlQzh6XFX1ReSkb3XT9ue6u2DElGTI6AzFeVuf64izulB3Ka' );
define( 'NONCE_KEY',        '89vrdvd8P7SPL2z54UaD2tsqPIkLTuFfMrufuLFx9b6EuYXUU7SnzRSZ8lgKWNbI' );
define( 'AUTH_SALT',        '80F89Nd4KstHxPEdxCx6HkJj4apTZHvXSHUkFfItGRe3pwlDZvujTIr1QLpY22lP' );
define( 'SECURE_AUTH_SALT', 'L353FYXF5BJZQebv5QPtKAwMq7UD7GZGqC7KunD5cCF0LF63LAY2cAq8RrKuxhg2' );
define( 'LOGGED_IN_SALT',   'HoyAMXhbTExF5BNpFK7b8HCXihqBituWGT8NSYiLKAMoRHJwZij1HJBq7ZF8f4FR' );
define( 'NONCE_SALT',       'NTJtTcPJXZjj05AqvF9KebEp29RsLikP2C0qfgU4ikuv3yKBTgSmKFeuyIGHnrZR' );

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
