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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'newuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mkhRF 6%(:+I-$?Fge);/4<[+vQY04ehYHT>Ft& +&vhEX1bw2[E&=~cLkSf/CEr' );
define( 'SECURE_AUTH_KEY',  'sT%0f@u[!vkMaX/Ov,XUPwqx5v` B(1fnp%>|hrI2D5Lzw.3]Bjd-qCL/u>1,558' );
define( 'LOGGED_IN_KEY',    '2Ocp01[h;Y!hb_U.U-way*{6^tTu|y|deyPr:@5CQv8 |j]8y#qF)?ddnLHe)j>8' );
define( 'NONCE_KEY',        '${oxV W@@`<m#{:;mX;SuC($H1JIPBnl9|h!>teAS}g3`7, G?I^M$xz(3qUfQ`f' );
define( 'AUTH_SALT',        ')lST+}D3?@gKoleUyv%.R;1~8;<u,vH1C.7`w9ZY)1^-],XbA|AY%r`pZkk)K qt' );
define( 'SECURE_AUTH_SALT', '?ZSkL4Ue?FLPF%*OpFMwQ0r-MC+7cE==I/4Fe=Ed!!FvTa&{jtK^x(quzXIa/4ov' );
define( 'LOGGED_IN_SALT',   'O@Ap_6 ke5^k-Z+Dmyan_^lvNG9]3Z5-<V_3t]FQ[3C&YB?|%zvsUnQMdZo)A2 2' );
define( 'NONCE_SALT',       'x:AXvrOoDmWJnt{2-?SpweV4bA4THp(~6<>OHCXRt}HU!T2z~~6*S*Kt*TJiCZF%' );

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
