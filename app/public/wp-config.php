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
define('AUTH_KEY',         'uk7FPxISxszSrJEm1MBXB78pmyLEyHvVjQqZzzHfXYrD7OELg+0zkQfcwiGvkrW0um+sDLGJAlXaQioCowrg0Q==');
define('SECURE_AUTH_KEY',  'lig0IHCf/mTISBe4Ef2JtBa4ogjWSTv8U5X/gj8iZTmyhyVxhzZdu5OZHQ19KLGUS0oiHOlpuKmHBfstTGiChQ==');
define('LOGGED_IN_KEY',    'RBDqFRw3kUAJ+bjhmo1ykBznbkUYIQv6piqzorEGWSa9sP0CiQAoEyrwjHoZDn9VueaSYz1F70dSXUDtpmmdJg==');
define('NONCE_KEY',        'I3F+8t+SfpX8A0yAYu/cR46iEsHtu3q46MrW33rpouUTPMExMz9QlPTmTNN64zCgLekAEnqjfxI2EgPrGpXuAg==');
define('AUTH_SALT',        'lQMtf7jQi09mBbDSKozyYNSxAGg9Vtc11gzwbUBClMtvp5gJu29r1WLc26PhsmjRJmsCPLYTe2fWAW6XL679dw==');
define('SECURE_AUTH_SALT', 'Z5IjGU+Cvwc9SOBAS7Kc5H4aueh/aPU6EIvR7s/CWdwikQauER/gUhiN0Ci4PhIKaki/MMTmMM0ZQ83thAtbAg==');
define('LOGGED_IN_SALT',   'cONlHyWQpKgKF4AZhmf0YDZBF+cU81Dvy2vFe6jw/yWzJjsNUUUvAiUCY6zphIY3iEvUw9ZKfySkSleeox6org==');
define('NONCE_SALT',       '3d8f9CRm20W36GQBqK6J6+yK1isjgRapdadpSlLMs/h2A9SFQSeWCeyc8bNMPV57aNgFh+sO2xTJNOlyvG9WXA==');

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
