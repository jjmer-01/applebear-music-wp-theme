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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dW99FVIsBB7YbMGNXIaZnG28jIPK5tj+rnhabNhgf3eQqp96U1VCjWInPR7NkmbPLrrMSunjXWX4lIortyRmHQ==');
define('SECURE_AUTH_KEY',  'fcpcFYmO6atrcjxy5JDdGAH1XRicy/ymoI4WjFqrzhC5HFtAz2/4t663LHJkFzl3AhCFHl6yGDdhBmKiJldTEg==');
define('LOGGED_IN_KEY',    'NWrwr40rZBFdjZdLQJRVgIwCxhS44KfonlVTJI3TtnP0qPmn/quv6FVS/cnGJHasPWMvdVKjn2O/AF1jP1IaXg==');
define('NONCE_KEY',        '+Yns2xlaL219AAJFYxt4/0Nhnb/swnpG8dWlkI/tLApR1pzIl9+5V/SXOzqYyJx2BtPo80h8WyD61sw/dkgHKQ==');
define('AUTH_SALT',        'Qalbcz6VqTF/nCYh6dXEku4HZHJBEOIKayi/qcRE9oo/5zaGfYtplywW96KsbKRBWaK/QFvMsvUzVUVkmKbIPg==');
define('SECURE_AUTH_SALT', 'KGKONUEJXCoG64KUbsvxhfISvvgMqvBvmzRJQWcizsSEJV2jtmDwbKuuJvPVI26JfZusz/cXpIGsZBNcC99dNQ==');
define('LOGGED_IN_SALT',   'wxC2bI1VeTNB3E/g7y0Wz2UJ1w6KkltZnftgKBDX7fwspdYEjUammwUQ5ai7LgbcOkQGoq6PbWuZtGz599yacA==');
define('NONCE_SALT',       'SLoUhdfDQqZym4j5viSqt7ZRY7hnHi20JxeVfXljoXbPTCqtnYRuKZJIQYIj9yNXnr73s5nr22MUliMxLnB/qw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
