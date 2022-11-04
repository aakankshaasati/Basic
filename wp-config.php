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
define( 'DB_NAME', 'basic' );

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
define( 'AUTH_KEY',         'N]S^RJB}F3H9-89tA]u/ SQn$2>&RX]g>UxL?.:&u5ujPj!&4Y>e/@t<Fh{+E^4`' );
define( 'SECURE_AUTH_KEY',  '&Gg}{dUL+SB|&@7CGn1j1UrADK_o8P+=x7GMsSBo[-~J2$V_Ii:OT`pz6,3LatdK' );
define( 'LOGGED_IN_KEY',    '5kFdr5Ix^mn>VM{DPF{cXDz9ke4j}Uug8l6LBYr}RE_)dqYR$qnAj4=<yCyT/A{`' );
define( 'NONCE_KEY',        '=,::0yrE;lJvT!uC3J-W[b(_vspjm#r(tSUMJrU2#m/m2^>v,k?BqK:#fxnU3K3L' );
define( 'AUTH_SALT',        'FIL!5b0k@wrx#y:tw79|7]yIO!=E>xD?*aA4RtN{w-Sz~T(Fj,3Iic8s$a?P-u V' );
define( 'SECURE_AUTH_SALT', '@QWl|ag79b7sT%>mR~x 7u1ZQ3k@S-v!pizYYuEr>+h:V@0UU%&~xHDYqB])~Zu.' );
define( 'LOGGED_IN_SALT',   '5y30ui7*Y+Fn:0A#&7cVumsaR`n&eh?Fi:dC@AC9Ur;WVhb>sLst47|;1o]]}F(V' );
define( 'NONCE_SALT',       'I8e>?53L,H`P:3o`n?(Qx1!!RFA#TR*^Q-+~NwX0N6~MlQH6n4@RK4Z$3,9XQ$Qh' );

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
