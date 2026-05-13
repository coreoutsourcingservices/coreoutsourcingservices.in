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
define( 'DB_NAME', 'u730669098_x3dfi' );

/** Database username */
define( 'DB_USER', 'u730669098_kvPUq' );

/** Database password */
define( 'DB_PASSWORD', 'F6I3EQ3eez' );

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
define( 'AUTH_KEY',          ' =qa3*d&I1,J7^@ v78{TQ}O*Kt8o?&WU3+<I2(a*CPxXvO9PI-n!si:J5Y+ntMo' );
define( 'SECURE_AUTH_KEY',   '=2KX[z6uC>*aU$qNv9X~#O%0@uQNxf$#C~a[B%*UIN18u6l?QPU?HRP ZW2k]X}6' );
define( 'LOGGED_IN_KEY',     'HQs#Jd5|}wshWi;C,b-K[autS.R2[d:zYVs$q9kxn2z5n[|~TuS}<4RNw`R|@dS~' );
define( 'NONCE_KEY',         '*dxP-=3GcoXd7ra97.`TFobH,4zb:x>):|`j1g7hV&O7v1pzU:!#0z=9JZK>QT!X' );
define( 'AUTH_SALT',         'U0xc:2hdW7uU2;?R^VFD2JYJ<ol4KvgBxE[UV:(]l_ FzuPDlm()5s=p2/SL%;93' );
define( 'SECURE_AUTH_SALT',  'Qa_)H])h$)lcw~Y;Ym9>O*CR}2XX^+;|3T[r*J4.@zzx2RS?vK@9>~2(de!=z):#' );
define( 'LOGGED_IN_SALT',    'sow2(=-vhb.T5>N3&j7-F&GdPXptGx6GhDJoIpx%#qxkPgiJddb6iCta,J7qP$MF' );
define( 'NONCE_SALT',        '+`BH:W @Hj5y&;u= Sqy*I:~>>Ne4Q!3L>DqOkNXD7n.se7Ku) `Kw)0VUa c[tq' );
define( 'WP_CACHE_KEY_SALT', '*$oOmOM~P,*lfw( z)_uu%8c?.c80tK}X)u+$(nb*zE{2C3frZbk)g>qqB7y%~AW' );


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
