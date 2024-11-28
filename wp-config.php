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
define( 'DB_NAME', 'web_zeldi' );

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
define( 'AUTH_KEY',         'BA$ pI0U4V[]+6~ %HjE>6d++@6b[uV/p-~XEo!dGo(4n7Q)W*?yzTzYGB<Dei^%' );
define( 'SECURE_AUTH_KEY',  'oBi=Q`uY{+Jr^g_!kA<XO0Pi>YuaEJdD)]RzG*ourcyAZz03tP&#BOcKsd(W@G[6' );
define( 'LOGGED_IN_KEY',    'wgPLqV`Tyb/$>gm,^$5z}q7chVSs`1]w8RHW#;rE,x0EDkr;lNB{$P{Ey.F6-#Pl' );
define( 'NONCE_KEY',        '}{A~iO0:wEr UlKB5W3Lz,<9_r{tk6m.~}N(;N1hArP!J(i$g)b9f{;Y:cNyI4 z' );
define( 'AUTH_SALT',        '94lM`0jpW02K83P+kF8z_K3NRRn9//4.3/><kZAHN&pr}9@5t6d/+m5sT!*eXv[+' );
define( 'SECURE_AUTH_SALT', '!RS=j7e|>kXjM@*`Ewc_>^`ij$UKANxX^b<D U;m{N9to-w+1sMpmMce<7.Jc0r/' );
define( 'LOGGED_IN_SALT',   'ITkdqA=i}V)yJtTrbh~V,-]n-ph]uyO;JPL.ztO?<?WF 0^)kD_&c1~}: Dw5`H%' );
define( 'NONCE_SALT',       '*tkfab!QfH~Eo8OE1+ekb)?VC} _9O(B{lr^<r( Gr~G}4[qlsJQk))yP4XLw==Y' );

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
