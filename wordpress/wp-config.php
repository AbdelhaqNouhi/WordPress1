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
define( 'AUTH_KEY',         '{Wz8phJtuI>N@0t@2@,3grwEr4qO<XoNY8xrb}zX/_9oT y{u{q:#, yjpxtT8)4' );
define( 'SECURE_AUTH_KEY',  '$e:QPZ3%4Wl$Roa[._C1ds|=B9@qS##}0 @AZg_g&rpr(O]u?pZXn{P#0tdTYmSe' );
define( 'LOGGED_IN_KEY',    '`L@7<<P@|+6m=S@J$4FvMMW{aJ=@eLzBcIyxRA@jgC}`2oE.{,7bc7{KQ6f]}w/O' );
define( 'NONCE_KEY',        '<9~N*645,bGjIPdmGx+j+>D!C`q,a/x9a[2afKLd![>SZ*ffs?mwPm-gMQ)K>xU;' );
define( 'AUTH_SALT',        '(h,YX;kt*6P9<.J#.d;G?Lej%h[GZ+x]z!.%7`-fn![My<gFuxa sD}Yo^ ;|OWu' );
define( 'SECURE_AUTH_SALT', '3n0tJdZ,15jGOYRop4=:b1}:Mo_Ix_r0V%U1AX$8fo*p7O6+0$;,DB@juU*o|x#v' );
define( 'LOGGED_IN_SALT',   '8 _AQN&c,GzUcS)-YuLPDIqnv#t[fcEl.tOO[W7<bo^!MnEqc|Fn>!MU-buK..hK' );
define( 'NONCE_SALT',       'i6K*4^4dWm1{9ee+[bA>8fp0VTUr(lH%!l[#^c=yu:62mkqo$.lwb3hk4YmN02z/' );

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
