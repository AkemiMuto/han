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
define( 'DB_NAME','han006100_blog');

/** MySQL database username */
define( 'DB_USER', 'han006100_akemi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'akemi0416' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql1.php.xdomain.ne.jp' );

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
define('AUTH_KEY',         'jYxHz34xD2B1/Chd0MbO1YxCNxCX3tBGEPDDkhcjHiAvaznymbh1+njaAVw47l2O+wfig8c25VVkKxtP6WhtLQ==');
define('SECURE_AUTH_KEY',  'akUF3s1Jx6Z+jXmCKTckzkT3SKj6SfGVU/aRD2AlGPVnzXBenFx/T1J12mTFS7g4lSiyFhzOc6574aUDGeCWgQ==');
define('LOGGED_IN_KEY',    'LiFUE7pmGovH6oC66PCNBvqmjq6SCtAvJKN6t4sErIh0VxsQNEjXrZYGONjjzt7QEn9xRkNBFn25CI3oZfVXPA==');
define('NONCE_KEY',        '9NCaVLBKrPpY+A3RZ3dwVTYUQvF7coAfCnk0+vsADyYagz83pBfAALGKdUMywRZLW6U33bFSR9ULfb2PERZeZw==');
define('AUTH_SALT',        '9zRVJlsTXK87DIYvZECHVsc13VHnZmB6605OJ6e9lwbN1BWI1IDajjnqjfNTlDZQtgb3//B8tq0V5PshDBcE4w==');
define('SECURE_AUTH_SALT', 'KHHHMxc9eCOoPxf+lP2L8YYWi1IXMmdSQXx2M0cP502BjneeyWyoxTzuqazrhEpbC6sZi7jWJZ0hLbnCZvGp1w==');
define('LOGGED_IN_SALT',   'DQJk6exSrZUdSSf1BadxNjZGdHHjHlK2g+GURj6JEREdFasbo/Zwg0BI+Q6gGe/WJZ+PIdtxAPJXUhAEhwWmiw==');
define('NONCE_SALT',       'q306lwWDILqjjZTcrNUREcWo9s6Eqzv0oy8e0Sr1Y0XhmKooXo32rklQYCeY+ttMrCDIzy1fe5JV2B3fSjCxsQ==');

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
