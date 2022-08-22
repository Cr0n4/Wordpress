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
define( 'AUTH_KEY',         'Y>,RKMdokk/h y1X^wKBxH863@MgpeGZo(n7 M)]e#iJ[m(ZkBM}( aU[x27)Ojf' );
define( 'SECURE_AUTH_KEY',  ';gdf_3-ZeSA4+Dz!yL7L!aL<H=q=S?n6DJ4)#V5)g?GmHM793?i0c$FZu~6`*dKL' );
define( 'LOGGED_IN_KEY',    '*T./@Q@ ~j*-2v,[z]8!rge)4S}.>AI4.V~h mo7u5Gq5cim]{WOG:/1PgW-VAPx' );
define( 'NONCE_KEY',        'w+)?Z_OCc.99vI/Ws={q`Fu5T!,PAs9EUgE>(ZR!`Z^d.-U2Xixl +7AMv,ulxz/' );
define( 'AUTH_SALT',        'x@|6&qEtTtMB)lWpG77Vvu$5!W[_[`?;g|`+W0}~T-_#HhArEAucQVDbiCx(cY,G' );
define( 'SECURE_AUTH_SALT', '/^13K]6BP_z4~,^n&$pG`am1MURZv2mgPb~RH1[3ql6l3hx(h)}GUkX_e_=b+.0U' );
define( 'LOGGED_IN_SALT',   'Spde9H=o@2*1~@fb cQQ_u^%rm(=}{ANUm[7]tI+]YvM%`23:ZOp,LkN3$]AGFW|' );
define( 'NONCE_SALT',       ',IUYJqlpg8Ik2yx+dX c?4HLnk!C|H*bBNI>0hsFd%vBZXKH5Pf}$CqOnndnnw,/' );

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
