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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'XQ07cnguNUIT9pixresRZa83t1H,Pj.6AqVD?BlSoJLyWdbCY!KEvOk2-w5h');
define('SECURE_AUTH_KEY',  'OEn9lB!ZC1cTS-b?wOugMhH63UJ.FQkYX8qjKGV2_mvW7P,RLdirpAxetI0y5');
define('LOGGED_IN_KEY',    '!JGeK,3xnPSzAF4wBbRqHm_dL0cUv9oXyCtfMYWT-2aN1E6Vrph.IiO?D8kl');
define('NONCE_KEY',        'aPKbD8Fdil1yL9wnjrkBG!7-?mzUgY0x_sXvS6ANVW4ERTfe5Iq3cCMJpt.H');
define('AUTH_SALT',        'mJLTSyhvGAWY5txZPBFIEz8l!7bVuQHea2w3,-9kdn?X4OKoscRipjqD0C6g');
define('SECURE_AUTH_SALT', 'abWv5TA.6c!ow2nO8-GlBkHjiV,Z?sdtUQyXJR0N9CegS4Er_q7FMzhxmIYP');
define('LOGGED_IN_SALT',   'o,g?PvLjdRCHnN1TkXE7MQWxeDSalp6OrG4mtUyY8-AzZ!J0b35V2q_KFhuw');
define('NONCE_SALT',       'AbnjrJQREdONc5_fZtKvDH6MIh-Us9Sa?qXy4u,GLW7TVBmew03!.g8Pli2z');

/**#@-*/

/**
 * WordPress Database Table prefix.
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