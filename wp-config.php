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
define( 'DB_NAME', 'db_cassti' );

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
define( 'AUTH_KEY',         '>cPy)pk3P~K/5&4p^5F<Dk`)zwLK|fN`VD?|^bsIPr}.6Q^H[u=sI/<T7Ly#T&Qr' );
define( 'SECURE_AUTH_KEY',  'm 7S!1N(<rznkK*Xa!R*@-Gz~z:/p-lM#5YztTez#oln;poI7$zsc. v7u}vR>xu' );
define( 'LOGGED_IN_KEY',    '*J$WH iATu#:>gMrfF!w$6O5+[-h#f(_nhQW`dSO&z c%o1L2[h+k(?Le2L#MS(P' );
define( 'NONCE_KEY',        'Bzu!,emuHZo2Q<NOZTvaX<IdKpt|^@WIPu*e1f6I;[Ek}C+taz{:0BG&|uT]SpRY' );
define( 'AUTH_SALT',        'J>gUg>Rt|r$l^: & .lq!AgTO{=xdS/RbO?mQ(I}C_^TT3sI)d 4j}}=]XDHxZtx' );
define( 'SECURE_AUTH_SALT', '8IcDtzc/V0,BytH#Tkg~QU(D)`=nGWoE.9}, j8jGQu5;H~TS TQM*g0]e!b&mnA' );
define( 'LOGGED_IN_SALT',   '{uXVU-6,RNxr>~k7`*_0XWz#LOvs&L3 PLb#y}2}(;ja8M2ZmXb21A,bi@u}euC ' );
define( 'NONCE_SALT',       'YS3@Dh(@Kco9YhEg@&s;[4eGL<<F5DuCg**3mA&MRb{}kn8Cr`2zIBLgk73X@m[Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bd_';

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
