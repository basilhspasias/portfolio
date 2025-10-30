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
define( 'DB_NAME', 'bluehibiskus_blog' );

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
define( 'AUTH_KEY',         'c4*Ap|;QY^F#lbRbL yH.9- j@xNJSo1D;9y}}5vWYW|@gmEIeD#->r3Ht5GCAq6' );
define( 'SECURE_AUTH_KEY',  'BU{L[1TxBxgziaHL)xA~|1]|+PzQ!YB-WO@G9EuQ!F)f-~R)ZWN-`oY5qd4(~G2b' );
define( 'LOGGED_IN_KEY',    '`U}*X-Li=tS%eGK8WOpyoo)w8Xn4UlQn)zsmA*PIDp8L#;kIA@bc!M>rVi|qeH>t' );
define( 'NONCE_KEY',        ')[I;y+y]1|hnd1[.[j_K7?~P_I?;.Q7WSjp9.d304`cIe`$S{g0WbpF%0}8A:B$p' );
define( 'AUTH_SALT',        'E9<aeG(xV?a= 1e7`*BtFC!X^p5Two&&Nfs}.k*p3ss(HNV].Yz0lkm2/l+Po*:L' );
define( 'SECURE_AUTH_SALT', 'l>CqlWX&qMOxm@M~?L3H!vwgu/!oT dn^vF$/]7N(F5~`P`rk?I%&74Sk/L$!-b[' );
define( 'LOGGED_IN_SALT',   '4g ZA2n_<g&/UG.w<:oFHPm,z.dAdxv4s)CZI4aN|&s~$k?RK#D .U3XFHsh93#g' );
define( 'NONCE_SALT',       'sI3H49CWB.#b$Yt<^jktk``E.nQQIR=n-o@i`t}1h_X=Lvira?69TLV|[V(i`XMA' );

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
