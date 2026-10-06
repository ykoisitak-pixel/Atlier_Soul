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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'IP%l[a6I>U>|6,z ef#<j?P55ulheP<dQ[~T>(w-Eb!!1.Yv)e.yDlj7Z?j)kG%&' );
define( 'SECURE_AUTH_KEY',   'tfy|T]EP{;i>ggKN$)!`]cXR6vLZG=Vk holl@0Z;YTzf)kWn-n-tfbA57=DaA!]' );
define( 'LOGGED_IN_KEY',     '@S21bck@hthYb*4f0IGoAbsY#nl5;,f3?]$V*2N!lI9pm(l#au$Uclupx*|@3{hB' );
define( 'NONCE_KEY',         'ZXbO&Jn7OlF?0W{0pAfjJ0Go ur@)RFXHlSps,3~&9j: 5u))?cd8n!qHnV]~BV%' );
define( 'AUTH_SALT',         'w<-nr%hR=.kkM jniO0[~?K|Q=3z8}2Ek|HI[@M]oI5W25bb4l;.=#GFg(m-Oe?$' );
define( 'SECURE_AUTH_SALT',  'l>]hM&gn6VA}~$Mwvb]^R>0-KmMND1?wtQVmJbR5$wT2,e87KkKAL*l[`b-QpiJL' );
define( 'LOGGED_IN_SALT',    'uzKM&|>-UC~55c7v9d]Ft#CIi`+4rKOR^HN-#rgOhF-T^*nyd;2PI0sW}]=p%leC' );
define( 'NONCE_SALT',        '%FY]oZZbK{AJ$}7S&3=OF35{1tR`b=w:GQ5nuscs*L*=.uSy;F>)<{)uQ>r7*8]D' );
define( 'WP_CACHE_KEY_SALT', 'RN=iITy76FFie*;T3kt&mKesnywuGS]nG$Dg8N-Zfnp~X mGTg.T3X.OTy+lYy?Z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
