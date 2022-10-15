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
define( 'DB_NAME', 'wordpress_eval' );

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
define( 'AUTH_KEY',         'I7I@vDpXyE.|>|{z6+488/|2:hKQ^k88vFLWsn&A*C!bzaxz7#*kUe0F `wqtx:M' );
define( 'SECURE_AUTH_KEY',  'Z}m?11Yq8zkG UU%{PI8I~qe?Usd`m{Wu.lTlAlkTv$j8_q@g]~A0J|ST!TGK:>!' );
define( 'LOGGED_IN_KEY',    'Hkb8`M4g.zy3?(^H$E-qj(a7U2{+OZi`WrG=Kyf!XXGo_ocyop}%bUT0RrR7~],v' );
define( 'NONCE_KEY',        'g:{ulo@:}vZv6zDuvo7]*w-S-=h!q>jkTW9FAU}Rt*Hr}EO?L:],k81%Wu8f^mV]' );
define( 'AUTH_SALT',        '-1:r4EW{-wdG?.+@HIMyB {+?9}=k<ZbTW#~Xde*fJu1`t:8SA/W##K%pL)Y;J=(' );
define( 'SECURE_AUTH_SALT', ',`R.vUB0 (<:+11NCM6K)IF:hP0qbiX?qr(>[rAM2}9FINxFzA/lN:u;Gr|Z(Qu%' );
define( 'LOGGED_IN_SALT',   '$Tc7EgtAs,(b_YxKN~j+sb5?XJKMSSc{`,9]&e(p]J|&x?i@(mvZ9[:J#YSy^Y!c' );
define( 'NONCE_SALT',       'g4n;4>~G.ciAAj}|^ XCpmIE5BX/^z`>LA<]Licox^W{`,1%Entdep}tbdTz+L,*' );

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
