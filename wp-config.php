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
define( 'DB_NAME', 'hellob2cwp_db' );

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
define( 'AUTH_KEY',         '~6TABfMdy0F46zD<&%-0I[/}`._`FYfyfqp6kV+9[*[P#to`JyUrZUc?ZC&u%43v' );
define( 'SECURE_AUTH_KEY',  'hM>X#$ko$bA5#u;r3B__0(E2X$Plh555>Jkou-~wau)9XFM,:6beV_~uW0Ct>;V]' );
define( 'LOGGED_IN_KEY',    'W/FEI*;pJE@/gA&TlqTj$rS;7RR!=ty53%v`I;9epmeyKL Yi*nJfmB~<cz+{eAp' );
define( 'NONCE_KEY',        ')VXAokxOR5mmZ2[f%@tirVRn(@sDp<~)g4aoXccd>M`R@)[w:`UD6&S#cg&lq>K>' );
define( 'AUTH_SALT',        'R>cCD2M3SY?oYE{#D02?%8;>4ce+ Pn{2@3Nj2<AXF1~GK.J.nU{MM|N5GV@$iKi' );
define( 'SECURE_AUTH_SALT', 'WVVg-7H%x(k]l#xd$RGK]0<tzJ`0<[<vAE?bsIX7m>E?);kLDQ6qDgY8v/%,TzQ^' );
define( 'LOGGED_IN_SALT',   'SxNtav,2MmqN2%a5*9r:|EQD4=G3z0Ag*&_b#{bwX4|fRBnAW{;@7_umo@/~sqLj' );
define( 'NONCE_SALT',       'B9})ck(Q(W4A:,|>AtMq|6$fZbku3SW|& 4^g5r6BpZvS<0=8*uYt)~vpngFp(OT' );

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
