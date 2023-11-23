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
define( 'DB_NAME', 'dbxdigitech' );

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
define( 'AUTH_KEY',         '={Q9CTbz)9@1Ot4#~5Kf}};Nx`Ub^|Q0]y&>rQ?kk_ZlP&#j*nSNU.!s#VQh;TjE' );
define( 'SECURE_AUTH_KEY',  'T]7D3;zyYE*D *s169cT+4db}Dw0M3Z%SHl+?%QzkaAsM43D!o9~0HQFMEs}<`%h' );
define( 'LOGGED_IN_KEY',    'o6/l#XJ&$X5I.^+UP$3<T|SkMGRri2I^co6&wXUmxtlbF!PCBOliqUIK/g=WK,1J' );
define( 'NONCE_KEY',        'nw-^n_aBt &+nOU|_k2*8-3,<t3vis)p|s0#(dp|9y;snJ(I)9j(U||yb iR[cE{' );
define( 'AUTH_SALT',        'GPT[>Hm}R39G>tI5KYl-Al1z)/bx|v1{)@v#,JvMQbgzB3%6dQ;0%L>yCON,s@FK' );
define( 'SECURE_AUTH_SALT', 'iR^29m^3`s`V<hku--5)No0lXaJ;~8HN)()Po9@0//$&<i&(I#!OxBMJz,g1(x25' );
define( 'LOGGED_IN_SALT',   'J5jb^x5z)<CQuqofFRrIBcqq#RZij_7n~PMaG6M(#g|$A?3X.Nqg;|< {un)49nX' );
define( 'NONCE_SALT',       '!/!IJT 7u:o>Veq7}<*gPr=o8VdV=}f^1KEXe@N4rW&{+G~p&Ytt,n<EeQn9K&e~' );

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
