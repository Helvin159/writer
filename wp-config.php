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
if(strstr($_SERVER['SERVER_NAME'], 'danielle.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'kmmkcamy_writer' );
	define( 'DB_USER', 'kmmkcamy_mrrymer' );
	define( 'DB_PASSWORD', 'DoRa0411!?!' );
	define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'EbN2f5X0McGiGJGesef9Z5ZUYM6ONU99AiXDHO5O92/HcIp0/UBWDKdvaYl0oMzugrGAteSoP+g3WAFCqGOyvw==');
define('SECURE_AUTH_KEY',  'JSIpDU2XHWFscXZ0ccFpB0l++OCTQM0j8QMAJvO7F0/99RE9peHdPaI3n+iYI5to6DHaI9F1GOLOC48bPL6aqA==');
define('LOGGED_IN_KEY',    '5/MAM/7L/PTmmSg/L+B/FB/5CEJ9sTjEXpneJ7+g0YTXrp20/LxhtDZYgCE7FHabMnd3SxGsFZgYk55A78b8dQ==');
define('NONCE_KEY',        'BUEHZGCfSVN1L5AvU2mL2UMM32zmTvchA6XeotyUYB/89Nzb8dwSDSdF4/ODIf2nKlBSPSUM/a0x51CbQcPcBQ==');
define('AUTH_SALT',        'Rev9CD+0ZKpDvGQbvuMl0zlckpMjBY8dP938sKNbOfexQ/B6YCVA8ZmuSIv+9SKbPaAtTC8MA4+UlT83XZzj1w==');
define('SECURE_AUTH_SALT', 'Y7OTFs1zQEDvz2c0Bpi5w2zaUC8JNl0ClO9Vw39VxUmFH57rKtEO0OrcqGI7NkB2odqm4hFt3fHx8vsEm4Ghog==');
define('LOGGED_IN_SALT',   'kyAyWABH5UZlyOtuhvsmG9Ax7neO2PILo5Jg6nCekEjCLIGXATZ3SyRJ5zBK/T9fH80uZj5LJvKx6KUo7K3z+w==');
define('NONCE_SALT',       'D1V6kBgbH706zxDWqs5MTWu4uH/3pE+vbJWtrlA0FMpSkvNF2ik9A+supjFeRVlZ+19dY0ecqHZRvQJRzj+hRA==');

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
