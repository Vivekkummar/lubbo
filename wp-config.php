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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lubbo' );

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
define( 'AUTH_KEY',         'omK75BVOjb~2*fLQP&x2iFC_?5Ll T-~;L[4a&KVS8R;&A(T)fb>0Joz.F)7{L;4' );
define( 'SECURE_AUTH_KEY',  'O`aE6im^H,6y%ikd(dfTCZr3s|e#%_!e_KX!dym_#lgM)k~{`(z0~K#zuDh:rY|7' );
define( 'LOGGED_IN_KEY',    'w],6j]8_pUr=:oo84&Gm=Wm}Nu(nP:EMh45iwR9ZC(w$6dBn?L?:f>R/Qnu#3);D' );
define( 'NONCE_KEY',        '~1h7NJq7w5}NR[UMcjUT1*tLdXvE+&3i%y`g1`.iVk<mWZ|@OM!uEX~eIh3Eh-@v' );
define( 'AUTH_SALT',        '6p^:ZX=%[1Y3G|f8n.hX8%9EB<C#W_NmV)`E#r;47x*: K(gO$KO:5M4?]3`sy|l' );
define( 'SECURE_AUTH_SALT', 'Lx8,k_+}w/)|Uq{EE5B$x~?<P{8WZ><^)7D`$#T`Oz3Ah:M~hm0-Xn4q`CfpR]4^' );
define( 'LOGGED_IN_SALT',   '#?.-ngm#]>~alA]j+.9$-&JhM^ls S[aX9pToiG_YHnvpKJFl&b}|w?jM26>V2=)' );
define( 'NONCE_SALT',       '|nvR~.#F|p3${{]rJw cm._RP*aTyA#!Pky6`1A$@)$_>$nU#UX4BVBT4a-Z6(Oc' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
