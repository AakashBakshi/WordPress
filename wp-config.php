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
define( 'DB_NAME', 'profile' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '#28c]D~:JRLULoRis;a-@SlbA>C;D/9h@;#ZJ_LI8MpqT)uJEq{OH lub:<?8EzQ' );
define( 'SECURE_AUTH_KEY',  '7q%f@]]!:M4RID b%%^=mv+:>V;^_1)^H:PS!znRQzyv#x$T[/hR&/_^C%T)2}z#' );
define( 'LOGGED_IN_KEY',    '=c{k,7)]jRYCY_7vw+_FNqDBQZVg y1ZW=4B48UOL^Itd(I9dU3Dep(uw0)c:kvi' );
define( 'NONCE_KEY',        '0t6,4l~;;CELn<~O7o[8w3YeKSLO<2uM>WVW:tEDU@@Ovh?d%yha3O`|zNkl.xb}' );
define( 'AUTH_SALT',        '^}&@.&XV$h;t;&2&36uk?~~7q#78t!VrZP:+W_h=2EB)?ovYl fxDY?,.8!q;`2s' );
define( 'SECURE_AUTH_SALT', 'iX%;w.lEzHfl_G%[}iOD)hrgTf yQ@e]fvvEi,xKdAw>73oyqJ*~YD>cKf6!H7>[' );
define( 'LOGGED_IN_SALT',   'w^Mk-/GXX3k&P=S7j<8xlW? Fwn|}V,/aaN|#MqqE!8IG6qlBVLN;By75/uJFAno' );
define( 'NONCE_SALT',       'ILv??7b#HL^yBc)JQG t3%<$K_/Dy6Bdu-6OA=21%Er49<{3`rtU`%jr[/j7s/j~' );

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
