<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'wordpress_sale' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_sale' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '[[h5,tv+9y)<[:qJpgt:<CZ+}zHey^%jET?$8QPl6YlTQA~)ZIjv^ fW,PM(i~Tr' );
define( 'SECURE_AUTH_KEY',  'TGN75k/J&:.@$o9lhH@?swq;+F}#T*}U(dR8rhsk|-)^d.#9s/f%~-};F=s`YN:c' );
define( 'LOGGED_IN_KEY',    '~dtG<nS3Z9y&%OfA%CH!u4VNXDvP)ni9Ut%pG+#bc}_P6d@Q-rnF5C/4Qfc~-$G+' );
define( 'NONCE_KEY',        '@a<N|V5b{;q>_%HVpln1Y/u(Y41jK4/;+|Q!KrR_ThprVStN`hs:E`o*x+m+*dCG' );
define( 'AUTH_SALT',        ')Y,x;81 4sBbGa6#OA%cUf|p8*<0[!`9u(cZx!j  9)dn]nU[{Q(G$aw+G=#X?:>' );
define( 'SECURE_AUTH_SALT', 'A3lPF?Flzn7!$nHB<5~jk2H(kH%W]V`h8[Nlh;Uo.6=kF%W6@d6&pk6k;?z076+#' );
define( 'LOGGED_IN_SALT',   'OzF/;R~5];LPg!RsrmGr$B7UP]sXT6`F(p/Cv9)/&(&6eh~Q~YsGh5&e=MU6MX=2' );
define( 'NONCE_SALT',       'j *)He*VdGv(4xYBz,4b8$U19Wt&7HZ];TQfic(i4_497)#(;@PV+(^0#(e*~@V?' );

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
