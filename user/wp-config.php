<?php
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
define( 'DB_NAME', 'u730669098_pPTAa' );

/** Database username */
define( 'DB_USER', 'u730669098_4T3tb' );

/** Database password */
define( 'DB_PASSWORD', '5Zot6z7iJH' );

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
define( 'AUTH_KEY',          'Y,3?B]_?wpe&1{()4%%Pcr>O8PT@T&6 qyzYrbL??j)5mkW,t~lBI[N_NuxSxV+f' );
define( 'SECURE_AUTH_KEY',   'S*,+b|+&RS(13tUq.-QY3UYeKZYlDP{YIvTG1K)y}c!;k=:{Ilj$7$ @|%dd}k?9' );
define( 'LOGGED_IN_KEY',     'xz7tv<0ESZRnoWQZ`VTP?(iOzupF%-A:>SEX5w:3sKE_Uspo],a,)g`M{=*Oi|+i' );
define( 'NONCE_KEY',         '`KGu*l_{okI8U>FKXlkJ>2t&%])2UoEl~JL.d}*)2(L,.>Pm]HwDA%RYLcjVc[0Y' );
define( 'AUTH_SALT',         'iVxzi;dUh%kRgoLC|JO0(dEcF8/>2=2r8URs:;&Mo@x:n7(AzNDK4@W@ts;(p7`s' );
define( 'SECURE_AUTH_SALT',  'ZywrbGoVPhS5sUxV3Vk9jq%OkTOvLuJjQFAMbj=H)$mTk{an|/&Gxh8gVxmD Z|e' );
define( 'LOGGED_IN_SALT',    'cFvzh[7Yg*`_4;n@fs@Sz8ZJZ_8)F6}]ja_BXp;Q)Js}`T)uPbqh-7:6oQ>ia$ju' );
define( 'NONCE_SALT',        '*}T6Fph^BV+<#IiHYpG%0,KHneu~@heMRIw1>-<YQPhV%11]F$sdZrP8D{VH{cgW' );
define( 'WP_CACHE_KEY_SALT', ' w-TuxE}o6Yr$Ccbk?p[a`9`i^xSZnMa0L)Y11C-J+[kN s.K6H?ITh+s,M(bDsx' );


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
