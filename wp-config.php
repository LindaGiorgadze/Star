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
define( 'DB_NAME', 'Star' );

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
define( 'AUTH_KEY',         'qTm@*ilMqq1N&2j/0nJC1xa@=G:T%>[%AH]~Ism#N{Fp_#{qhi`u 64$4n/%YP]3' );
define( 'SECURE_AUTH_KEY',  'h:Lu.ICo_W37,GN20MtdF@T8T[*F(/Qw2Sx~^O7hHv{Ry<5O)c)mwz2<OJ[9BKBx' );
define( 'LOGGED_IN_KEY',    'L,+yC/cOOYQWYl2Xiv}YI?umg>|T`LWty+p LS6 hFOSa^nBF5FzG&,ADh5biYC6' );
define( 'NONCE_KEY',        '/t5v!w{A.}9)FOH_vzHRzoix6rzQ2<|O/RX}-|]Fo>|Gi.Ry:9X,k]^`_n2BGOpC' );
define( 'AUTH_SALT',        '+vPahk3cyj#zpGN@E9*<+>tsSF!-*5bhW`&Z;J|y?M-1,&l,@McpYz:z8<!grI+^' );
define( 'SECURE_AUTH_SALT', 'eTh.+/csPm+O6bX. MhQ{&(`h|K_<H:X83&cal%;]u1&FfP$5ZgH:]xsog9[i&AQ' );
define( 'LOGGED_IN_SALT',   'O*|xwMtbQC-W4yTBsi)4Yk2NrjgQF`kzmVIC>A@>Wj=`[6GWB_F&y9Du|e#k(?yT' );
define( 'NONCE_SALT',       '^&r5ZbZf-24Np- j*SD*7^7+FJ C~b6Rg,Y9=n8>o}z9V@cdarA$:x|3Pbh2tPQ{' );

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
