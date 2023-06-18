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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '0v8NE7zOnF1hhvk8tH4OSe5Wa0b23wipaEiitI8C7ntD8+gHW8hhoBESRKlzmyFdkgQaC2nIY6F6mApJMu1GBw==');
define('SECURE_AUTH_KEY',  '/A25PzS/iGWUiLCWtMt3LRero0ler7ik1Flq5Dz3xcksGgpYhK7rzLnn3mj01cfC/u8nyTUyVFGqHb7s/PHLBQ==');
define('LOGGED_IN_KEY',    '5CiyOElAujoqbLpEdMLFhYZistfz7KqqGBE093VJd5kge96Dd5HL+n9iqLj+MZdUTG474nufjMJOpKMrZb3Keg==');
define('NONCE_KEY',        'xa/KMVJL5zTLJNDZcxDVcnucCAm/d1IM22Rp8nTa+aj+Ay/Pu/BgfUwGxtGSq6rkb7CB/Jp1or+3VxiMlA0T2Q==');
define('AUTH_SALT',        'xQ2tzVvIa5vASN2X3zq5cwuH0nVlNh/JvR1UBajBtGiHLgIB1FsjfZrI26s8QaSnYJ5vVR+k98pwSFey8ktuxg==');
define('SECURE_AUTH_SALT', 'VIPpPkZTCMAUZpEWneck3ROXJhPPcp9oUTTFM0n6J4zyY4b+CvUFIBG/F3E5lCz3Psjo7NhXKku0GiTsLa/VOQ==');
define('LOGGED_IN_SALT',   'vYodvAPZPMUTIOySQu2bRieDcCijvOCiCfc6cYqoRwrrxcBh1fqdwovYF85JGtu0o1kKMu/PNmo6wZgLG0p7iw==');
define('NONCE_SALT',       'AaoH75H981tmQ0qANiawJa9Gib+GPC3PgvEt+aoVvgfbRf+PEFa90jwSn7A7VYih4Fw+hCdT9n/FVzhfSo7piA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
