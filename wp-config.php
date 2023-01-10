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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.dKMnqmEZJ)v?hXgHFwueD---3nh`Cb_EG%I4<66Ud]1>;-_d,W=XgCrZ_>35S@<' );
define( 'SECURE_AUTH_KEY',  '-r3={J``TrGRb(;1{Qd9Fw8f=|)W?n$QxXn/I3r_cJlv:D^u3,epj~V8c$pj{j%^' );
define( 'LOGGED_IN_KEY',    'z0Og]OhH[TA>8hNr.-]*)&3i>t%1N#4dSyuKOB:s^/iG|VWTqk+B2T4N[b}x?mAM' );
define( 'NONCE_KEY',        '/~&$8%?:rOj _*QV156R,xN[-~x_oNV~J<(;&&[/pz@k1)t*5[w4q~)d!vy$*<H;' );
define( 'AUTH_SALT',        'Wa>A,lMc{HQu2_vjx(xlPX<`RBQ++6kQA7G]C]{,*wb:iG+=g]+wnd+3I1lD@&nm' );
define( 'SECURE_AUTH_SALT', 'T7_tuRxX)f@EHH;ki!*6~BIT(XR+Nej``X^fSxzs]N*Gy$__3OAc-=c}j0 vX4gu' );
define( 'LOGGED_IN_SALT',   'ZqfNsdguwV#;k,L!Vq4BZS5m7j0C@B8tlq[h==(=lUapZnZbtieq=Zykxnv%NgiR' );
define( 'NONCE_SALT',       'D?&U@bmeGz# J`Cfv<uy{.t& $!8[wu4ENPB6AJs5*MGFuW,Ohr%_r2XHs?9RG^2' );

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
