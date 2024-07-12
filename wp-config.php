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
define( 'DB_NAME', 'newTengJie' );

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
define( 'AUTH_KEY',         'dv`i.mk48,`vM[,y]H}XAx4.Q#fH(ND9Z6j<)S-pp@K&rI0+4e*nTH*D#^b$hTjN' );
define( 'SECURE_AUTH_KEY',  'zSfev~Ol!>Yq`fcDE;r-S-.dhScZ13raZMQCIDMI:i#+r11u{Z|Ws-N]F>ZWr*Ie' );
define( 'LOGGED_IN_KEY',    'h,n3-Xw$1o:[d[)/jB+I9Cw3LHC.1%]Y7B.JXNAmJM>lw$Jc$A@H)VYeM}th&o|6' );
define( 'NONCE_KEY',        'Ag,QA=%2rFfgT)A(x-ZpHs^l+:-n7GUOXm ~`+_hp}V/_N d2NcIFvAnDjK2>?I>' );
define( 'AUTH_SALT',        'nFSvDEW9AjxDo;l~@5ZR+-,qnLriB;G<DF_b!*SfjA`x<#Ej%]&C*mu&`}Fiwx11' );
define( 'SECURE_AUTH_SALT', '.B_hZ6kK123.kKxop2,a9Tn1x7;7|nx,s%nvD-X@zYm+LhaEbl9v~Uq=X9Y%lmxc' );
define( 'LOGGED_IN_SALT',   '7%pK*=K;mDxRj3Qmec@-{by;X->ejTn&og-<6j3XKl?Q&1nTRY[tU0iylP^pF97c' );
define( 'NONCE_SALT',       'IslJ`Wj<_UOacWBDgDT-(G]*oiQWP1&}qf[sW~R1BSJ|k{M-Jwp)RR$lpgSzBsLz' );

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
