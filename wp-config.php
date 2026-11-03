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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'buttonandbean' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Yqx8L5W)k2=sa0==yAQ2]fklpX{w oI2+w~7V{S-=.Y-p&s: @?B1>MmN1UIXj E' );
define( 'SECURE_AUTH_KEY',  'c<R]4L;+J/yjsEZ[G d,SxhE-K+ed+CbL-6(b[a!.-Vj#4A_x4k;cEX)wEiz8&iQ' );
define( 'LOGGED_IN_KEY',    'HUUbecw+Cmt?p|Ovnbh:^=Ne(#2_Hw<YUSi0]P[^bF(c11=4&#@eh7G:jyi#N|/u' );
define( 'NONCE_KEY',        '7S{vIA&*W*>QK$#LK0x;cb..eFRsYW)-S:i4t:$`T:TQne0$-[ #q*|RV[`>Gb~]' );
define( 'AUTH_SALT',        'z[Op>o 4=pc0!2&?X~Dg!tH )D= X6Va;]hM`1J}J;@>yK4g5i1f/tY,BD^ pG1m' );
define( 'SECURE_AUTH_SALT', 'Wj|,Txp`;KWAgqQ|(n)PH=wsyO$I4_nij,b/!_NK=EiJQy(3tE=<PAPpryd# <z*' );
define( 'LOGGED_IN_SALT',   '7dnZW?>riBh.bL=^Ac@pNtoh:?7hL&7jk;MS]!P^ of}xh(K=h?7WX2g/-}.Y%xb' );
define( 'NONCE_SALT',       '[`[/b5vC]fN`RGe&LifoQ/TEhEj{I0:;,PAO3Oh6}0`DT(i,d&&@Doe+aS7^^@-X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
