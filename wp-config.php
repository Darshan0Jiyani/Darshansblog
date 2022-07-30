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
define( 'AUTH_KEY',         '5?<2EaHe59qW4y[%X3<x|Ii4iC?Km#8<dhJC>wovz8mErE_AX<U>`g/O_Cm_bx>/' );
define( 'SECURE_AUTH_KEY',  '-w<5`)U95J<=*<yw8hT*yMnM.*Pu5E-NP5ikXpRKMhq`~E@7cuF6&W9IyLS%,E;J' );
define( 'LOGGED_IN_KEY',    'ZyyN<#u9FM>~WF ,2]+C-g9mNG/:L2$Mc#RWxcv|,X18(u*cJTAP95I%=<~8 jc_' );
define( 'NONCE_KEY',        'TE:)7PiPfsE<4(eEyPZ;7y|CbebY3DQ-mXber1C!D.+<TU50$#5`>WNVt$U7uult' );
define( 'AUTH_SALT',        '`=jRKVG?S6]K&TNJKTFlt)_uskEdNe3F`%eiK~2UYK87[QEmR`g|36JF!3c*6.Fo' );
define( 'SECURE_AUTH_SALT', 'dcl1e=IZJ$PKRY=-H9@}i>vmYQ.-YS=``pm*LKIG:#o%9!yXP!z/5j~ZN[,T2b#O' );
define( 'LOGGED_IN_SALT',   '>@FNI,-7V;=P9X }J{~2u`nEYMeR`s@YH0,y-2U#3#,e#$n]RLNzAlcaM(r=f!&J' );
define( 'NONCE_SALT',       '^(U9p0%SKg,HSI<-l3Cu])}/{t`y<gc-~we:QS>NJp}]B4z;Ncp70D)DX%8p%cEK' );

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
