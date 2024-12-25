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
define( 'DB_NAME', 'projetwp' );

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
define( 'AUTH_KEY',         'YI8$eJwq(MdgxgoD f#9^=oRa]We4E&>}4Hw4?mkX()=U5;^2<ucES0$vbNQAA%-' );
define( 'SECURE_AUTH_KEY',  '1N(njj9MgAL6[,=xXMo04`mkQD_1x0i~1(XqKw{VDOpe=F)fJqQF^[-#-qjLMeE7' );
define( 'LOGGED_IN_KEY',    '|nnXq(U#_a03naWPLhU=V9ZNS}J(j`6CWyateeh_7!Qu5vT6Yw}+(mkCd2[>-zKN' );
define( 'NONCE_KEY',        'I<RQ]4|gm8674rJsZl|p7ym5)c|hR=!V]za>qABMqAGaQWp2:sMQRkxTtxP]-ep3' );
define( 'AUTH_SALT',        ':X=Y>u56uwjlv*+1@Emj~e7.02dM_W:GM7d!nLH($S<snNYm#&nTCPTxlf!LX`oG' );
define( 'SECURE_AUTH_SALT', 'wG1)K{gvO$Q?aRw0I~2/u_T@sJ5WkVcQ;+mjS6_gM]UQd**bPLnEDtHm5(2r[}PV' );
define( 'LOGGED_IN_SALT',   'wVMw@heqn16$#<)O*+^vpX7&A4a8V#ZKRIVh#29$gzG(1~>Pi]/L{` C:@8dL6sO' );
define( 'NONCE_SALT',       ')hhnBe0X-=I7/C;^dd=mLo&)Bs<[iB4%tI{kk^^`f@XzSp[5FQYYl5#}I5.bVQ@b' );

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
