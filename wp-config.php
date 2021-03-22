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
define('DB_NAME', 'logicau3_WPHRG');

/** MySQL database username */
define('DB_USER', 'logicau3_WPHRG');

/** MySQL database password */
define('DB_PASSWORD', 'ZA^{^wxp-lB[r*l/u');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'f62ab8b99c5fcb0c3c3d70165c210f4f5834757d7c73ec7ba6614772035a35ed');
define('SECURE_AUTH_KEY', 'ea9b68b92b47029151187c69d039b43f91e97d78689d8018e6d997c0b63d2c00');
define('LOGGED_IN_KEY', '008b3c150e8b5ebf5f3bc3bb52bd31983e35cfbe720b70434eafc9a8642e9e49');
define('NONCE_KEY', 'c510ae55eb77e6676d316a5e003d728b0e9672ed59474972dbd7dab96c336dda');
define('AUTH_SALT', '9b347bc4724b6a7b0182136beaa964f001b475098db87a9fa92508e2f4649235');
define('SECURE_AUTH_SALT', 'efec7f57f18304e7b078577a08bfb864d39da436afadc9d3a205f51b41d73f3e');
define('LOGGED_IN_SALT', '93db827758de75b33fc598014be507d4c361748cd31e156576200bac0eed3993');
define('NONCE_SALT', 'a82a699e323f5e275e6e58ff5b7f97723a2271481e0e3a314d7b5b41ffa7e43d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '42v_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
