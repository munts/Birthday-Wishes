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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '7p0lkNJwMn9Wi/Wmd5pIqRFma+1xpZiTDE/rd65/WQi74Jp/XidQWweA2DdQUnr73dWMDqKkYn1PENaoiQSq9g==');
define('SECURE_AUTH_KEY',  '0JN40KQHT7/G22Ju02oMyvv3z/zOAltgzvAR/11qjyXamBB2LYdl09wfEg7o5tR351pl6JrljD8TFWxCtQuJxQ==');
define('LOGGED_IN_KEY',    'TCOXGyHPkdd7OkH2YvDHjLP1I4qwFLIgIVTTAGRv+5A5YtS65JycaKsOWT0qIorPkbIKiFrhpLh3Vnhhn4iUAg==');
define('NONCE_KEY',        'zsFPonIIL7soHn0ButZcijKikD6VmMq/mWoH69NfF25DQveew5x65bwoUQXQiS2A3vkbycFydkMjkB7Dk7tUuQ==');
define('AUTH_SALT',        'bEU28Tjb/Hr5hBsCs+7Aiwy+6YIDEPhmQakPJ4C+uvG5cCx6JUB6dg33Vk/42PaUxaWc5l3JoZfTAkr7VQaGbA==');
define('SECURE_AUTH_SALT', 'CQ6VOJ/8nHghhibVRmTV26dNzFPPWpjiW/0xaTdNQDvYp/UgxzzSlmMBF5eNolS3lv+0ZWSKucTAOdrxUSQC0Q==');
define('LOGGED_IN_SALT',   'cU4kIlW0xah91zdvx5l0pfubULPPVe4n95woJk0i/2X8x3zTGy4Jo2Vny2dU/PG9RPJQMu7iw+9eh+MnDKYIkw==');
define('NONCE_SALT',       'Z3benYxHGk63OzfQFDqQm2Ki5db9B+okJ7Iwq6T3Q9h0w1CMmQN7nk9yb3/bGOS1s/DNpr9hg/lj5K0i/ydvsQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
