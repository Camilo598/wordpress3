<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wprueba1' );

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
define( 'AUTH_KEY',         '1p@$Bu6MyVAc>tGkMa}%h+N^.*>*fwY;?bX*H]~{}*U6@q[18q1Y*|8/fG.[PI:H' );
define( 'SECURE_AUTH_KEY',  'j7tQC{[1]@:U6*:03DgD.Qjfk8Ejh:,jK+<`Q9-^x[M>YF&XV[)&jJjFuha&,cO6' );
define( 'LOGGED_IN_KEY',    '5Pl]PmC0`BaOe!QL,f/M&(FVgA#3t|G*#Vkct/rw{kG;juQ[YOHXG+qbh/.U[$Ov' );
define( 'NONCE_KEY',        'uFsvz$K~? >?YXI?c^)S(]g2d}T9t;6,KSyv&.;WNh$XF/RK{v&:Ahw6YVm3Bmsm' );
define( 'AUTH_SALT',        '+e<;|w#G3=^y^>gqF6r#RV)ZO{|QiCn_4~.5#c:DE2{&1A9 (,VGj!3K/Jngqc?{' );
define( 'SECURE_AUTH_SALT', '[XYBrA,%U{oBZS<Q)A9j +o `|mD <t:qy]I#iR-A$CDYZ/`hbwbKxj|m P&)P|q' );
define( 'LOGGED_IN_SALT',   '<SL3]eU~Y8J(?g )%:m_DG-gU.$=!1Rrg Qu!Qe$F LP1B[l|$$:K&jT=$BkDjgl' );
define( 'NONCE_SALT',       '_9J_D?/t1zwXHR8Y=*{p8Fw=p3cTR@;m:,lLAcG7)VfC[_wz0vmt!X_kA#cS28*G' );

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
