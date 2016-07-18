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
define('DB_NAME', 'freedom');

/** MySQL database username */
define('DB_USER', 'Dove');

/** MySQL database password */
define('DB_PASSWORD', 'TrizaJade@513');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KSDFJkjifowueriJIOSFJIWERJI9089083485LJSDF892347AKLFH8A97DFHJ28F');
define('SECURE_AUTH_KEY',  'FALDFJioaupf89478923rhjf89iuf8ua89sfjsn3ui48q9upaklsfjcvnio8923j');
define('LOGGED_IN_KEY',    'siofa9845rjo6q98uadfjo98u34rkjasdf9a09g0934j5slfjaiuer8374q6iha8');
define('NONCE_KEY',        '3r3ujoap89f7ap83hp98afaij3r4q897543ioqh6tq89p7fhp87y7347qiuhf8ah');
define('AUTH_SALT',        'osduf984r6ajsoidfu98347qiP8945HJPIA89FJ3QP8p8apf83hkjj3874252kaf');
define('SECURE_AUTH_SALT', 'sldfioISFAO66IOfio389479q0UA89fja8p9P4U5Q8JU89fJ89PF83io38iufajp');
define('LOGGED_IN_SALT',   'SODUFjhouisif3y7DSIFUP334898AUFHSDFksdjfakldjfuihjnbha6pdfn7e3hj');
define('NONCE_SALT',       'LSDFJioj6aslkfjaioajisfjeiuhajuhfuidslailuieruqhnaui89873qhq78yh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
