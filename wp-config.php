<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'departamentoinfo' );

/** MySQL database username */
define( 'DB_USER', 'martineh5721' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{=}|2g5XPnUWI2sozp>8e:3Xl<?~B*Oz)^7yn]4~<bhzjB1H`<Cx}&BFqv|Wrmu=' );
define( 'SECURE_AUTH_KEY',  '5ZGPKBh/@Sl]mIe!CX^)M|9no)NYuF;;}xT-Ar4JN|mt27,#%}^Gyjsp8h9<L#88' );
define( 'LOGGED_IN_KEY',    'jLLY}Ba0/<n[J7@AhQ /1?Q![-YH5dlAkG2?#0R49$cdE3#::8$*NI?lS]D<Q}b!' );
define( 'NONCE_KEY',        '/l6AX}-!y3IA]4Pi_T!ol-YE,RyUckjKk.!73x3Y-wppRH#xVfj?_w#5t//}4MJ&' );
define( 'AUTH_SALT',        '+<#>+$,YmD00T|Bv-|G9/+;as=`*~9_Duo8f>9/o#i*QgU*;U9l2Ln9uDAMfem9c' );
define( 'SECURE_AUTH_SALT', 'OcmK-lFk%0(~!>NW?Ja1@wUmsmU=Fw&<H<a{zdoX]GyN5S5>qH>!QW7ZToCBgWt0' );
define( 'LOGGED_IN_SALT',   'j^PMU:)JgJG!fn`74vW_[lIJ{|f>cPRGt;]5iq4(H4M]/n-2KeE(C)dW t.IBT-5' );
define( 'NONCE_SALT',       'W^kE+v#0FU~`wo(*:G5q* N2KW_S)nzlnSmd;iBlzJ, O=!b+R*(vmwtFS}wo-QJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
