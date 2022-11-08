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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hospital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.I$WHA[O|*c$*!1puR<WW8rSSUT7@uVJ cn/P7Ztz#fOP&K^{ PW$C(68t#w(aqT' );
define( 'SECURE_AUTH_KEY',  'SJ@ZdC^>&e7,E&[_<-wS|kNX6<~0%X[,MuOFW|MOgDp:AhA#31}%%-$nN[qA5#gE' );
define( 'LOGGED_IN_KEY',    'V83moc+3 S}ek,f$SG2}UA|D?A_YQXx[#DPzW92]z8Fs&.j<JFS{P!DAv]Pi&&X9' );
define( 'NONCE_KEY',        'yz2 -QczIKKc 3oCb7_x+zAzO<.0nK6fxg)3l^aVAJ_DSga/cSC[v|5lKs@8(K=c' );
define( 'AUTH_SALT',        '81c_ruU@$)3*Up6[|xoF`4~(cx8SX4yM8K;U%5FnRXEjE;[]^;~UQuG+vN[Ex8L}' );
define( 'SECURE_AUTH_SALT', 'wiPn*R5~3KTK?C{mJqS&X|QDa9~Y1ME 9e.g-&8FlZSP)wzDbWt+4Pd0tefzL;@&' );
define( 'LOGGED_IN_SALT',   '(h}dcUr3b;epgd %Ip^L8q:bU>$Oz5XU 6X;<wB03 JT=R6KEd#J[+P_f-axlKZN' );
define( 'NONCE_SALT',       'if; UPj.HOu.HQ4zgHo9}[_/qqG0|W2fvg3b7C@G*`Y@`4]wK,`uGC.&u5=v&i4v' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
