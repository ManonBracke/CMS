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
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}o Dt19|7,/l)Aw3h3H(pb[@a/@?cI^&.:(dM_cSif $+3oJ*F;hVQV|CJsD)5G5' );
define( 'SECURE_AUTH_KEY',  '2Y{.hTX;}|-1c(k(e`Z%eIKeosoO,U`2Lq+w9^?8A!d({Rdr ic#( xC~Wg8$sU?' );
define( 'LOGGED_IN_KEY',    '7rVM-.w?bE(E,$8>HN~An7/OSv >!@BPme^_[nS-*@#tVTH{Y:M-fUSK),U<)3jo' );
define( 'NONCE_KEY',        '[1[!oBTl;zHw@= g7G^XQctkvk3iP0D8dIxe&1$:)RPIj2$iBEfL/e3dg,qrmf3D' );
define( 'AUTH_SALT',        'VD{YB2 X3RvC`38&LQS=AV6;bi(%lFpy a/EMs8 gDWED2A1 F{*AV/s_Mzl3_TQ' );
define( 'SECURE_AUTH_SALT', 'Eu2]6|r]Uy?]tQvH?w9s!_{ocD2*Ek]=%t[^=REO@`v D(5OMnn~G:{[$2ols*Ax' );
define( 'LOGGED_IN_SALT',   'NIu0.1,~!W=_!F/bcn?Zphq-ds|Tpy^mwo=<$p/@&cETG^|^3RA$,ECLUa1hAEI!' );
define( 'NONCE_SALT',       ';(dcNl+M)lO|Z->&`mM),%)mC?Bd,j4 w[>|LD}oHF:/Q+Ap6gsY!?q~c:RF1;J_' );

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
