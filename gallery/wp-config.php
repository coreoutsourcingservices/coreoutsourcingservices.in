<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u730669098_LUWOT' );

/** Database username */
define( 'DB_USER', 'u730669098_Qt7YZ' );

/** Database password */
define( 'DB_PASSWORD', 'ELkEDdDmyb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'RcYt(:qR@D%b7@FqA?mLSF^u~qYRkO2x}?(0lV30e0!xOuAcV((/;tgu1j:tOP&Z' );
define( 'SECURE_AUTH_KEY',   'Fv/o(c_.1_=`WU6c:?d?7ZaUjtL`x;&nq$t(78e483`=cuic].-#~kO!HTbNsZGa' );
define( 'LOGGED_IN_KEY',     'jWw3;v*Ijy!}Az+S87r!C?) ;4RljSeV&q/(]w>pa|xqg=U<^{NsTU=bsp)nw+nK' );
define( 'NONCE_KEY',         '0^g/e:`-xNh2YPJ]3Ulk 5@<6J,mPcFCwL<rFir}!M24Aef}79WtBZS13G0o`JGv' );
define( 'AUTH_SALT',         'hi!n{tUlK}vOj3fQ_%|tsVKQVNJH>=6.fX|xx1zrRVewL:3#;N8Dw_>@;e#*:H$P' );
define( 'SECURE_AUTH_SALT',  'A7lsA!5^hv*RA-L8Ku1^F]>p4BqHuQ<tDh(d^0lZ1}.9nB?_dZ!Z`1Hi~QS-P1tv' );
define( 'LOGGED_IN_SALT',    'LRM^joP:neyh#7VEN[HtT )1i3SSS;.M62gt6agWcQD5NK]O3KJ~@*0^~iQ *z}C' );
define( 'NONCE_SALT',        'n<Um~K2-Av~rGW_|sirRm9IV*tjGf(2&w5Z@i5V|,rG6V6]/L2D5dJ(7nMPnU4?,' );
define( 'WP_CACHE_KEY_SALT', '{*shFN|kv*Z6+~BTUAh&}q$t+m=fx~Ah^d81J}itt&`{QsqLhjbe;9 *m:S.cicF' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
