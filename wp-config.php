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
define( 'DB_NAME', 'epiz_28552038_w967' );

/** MySQL database username */
define( 'DB_USER', '28552038_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '[BJ2S@p973' );

/** MySQL hostname */
define( 'DB_HOST', 'sql304.byetcluster.com' );

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
define( 'AUTH_KEY',         '78jpyegrc2y70s6brdf3jjfetbbmvjrmktyskvmeulpobts7ngsrkpdwfm3gfjie' );
define( 'SECURE_AUTH_KEY',  'ebt1wu9zd4fsf4acsmjubvv8bmdvvda3ix9jxrgy5lzfbcytiriwk354pkrrvphg' );
define( 'LOGGED_IN_KEY',    '8ycapa4y3vib2m6rlard3twhtjvmwp59jvnwzpfplbmbjlqzsl6cswlmdvtlcz2r' );
define( 'NONCE_KEY',        '6ndxc3qd3jlg3slkexcjoi8ksuap3lictsxkbx9axhhnahnkdeyksyhrkjnn2k51' );
define( 'AUTH_SALT',        'kfafjokkdnurcpbgiz6hncmz7kuvz3zdhllr9aausluhcrzj5ismw8tijxhfc5ru' );
define( 'SECURE_AUTH_SALT', 'pnc9cvppxycxwvzpaonauslelhgrfuixyzk2m02iadtbutoxneqs8fklk8lkg6ut' );
define( 'LOGGED_IN_SALT',   'cyihv8ex8jmqevehejf9tpyb8mux0ctriwx9fkqjke6wxjojxysuplsupofqzwub' );
define( 'NONCE_SALT',       'p0caf1t3ueotuwijt7lpcu5jdxbjxczxfk8bdkhebtiogsxpg1unyudnybyezd2g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfp_';

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
