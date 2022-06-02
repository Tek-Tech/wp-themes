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
define( 'DB_NAME', 'wpdev' );

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
define( 'AUTH_KEY',         'y`@5mge5`:O;@m(cpuoN+qLXU>#Xc9A5XOh_(?mNK5i|rfLN:r&ccgyt$~I~Gd)S' );
define( 'SECURE_AUTH_KEY',  '(@`x>Ag@O4_vD0QD#P?m8f1e..z56!STZV;8?(,mLMtcta|>=+wCndq=N5`e:-+L' );
define( 'LOGGED_IN_KEY',    'g:/gN80!ij!K87Fl-FqP=Vm^hN@S4E(UE(90|i)/e|owaCS![c~Fd%:q&3>zuC-a' );
define( 'NONCE_KEY',        'D8(v]DCHOLAj_~sV=by)^E4o#:Ufixmg{)^W8M5^~&Wy7A4fRJkT)lo`8]$c8H#P' );
define( 'AUTH_SALT',        'I&tL=a`sG[vrO0LKWpLAiSlA6u! FSUTB8>*nYcdB{qa{o%6 Rx 2}#H4b&J#ysT' );
define( 'SECURE_AUTH_SALT', '62aU_dP^|@lR h3dK?=zynn&rE>UqLa);~$fAt6&k| |txidWrc1-?$ygwyoC2Io' );
define( 'LOGGED_IN_SALT',   '0`j:>[b9+Zs4g/VE/uham>Z[Caz-3HLbUyPO?S&^sST4kY&qFBDgg+oF nWa;gM@' );
define( 'NONCE_SALT',       '4T+;N$U7b51$=b<sy<f!Qdq}!<yz)-Mr1cFjb+<<CaTI:}7&D}Z~PDy{5-3vEK;R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dev_';

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
