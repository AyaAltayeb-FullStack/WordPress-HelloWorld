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
define( 'DB_NAME', 'wordpress-helloword_db' );

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
define( 'AUTH_KEY',         'P%r@^[(HZ2q-_&O?@0E*tH^v]><9H7Cnq]qrvN^zBw#c%Pf*qJ.O <nZvD?-Mv8U' );
define( 'SECURE_AUTH_KEY',  't>?<PTL:7^yL:iFRaje5~r0?2inymxBRxJ!X(qj3*eZ{_m6:4*=Zroi#IAq5H5PZ' );
define( 'LOGGED_IN_KEY',    'G5,a!:^q)Za)|/ddbs<WwPCp;Ejuf!+p-*HFdIL(-X>+iLB]e>Su0;,CLa*dmKUa' );
define( 'NONCE_KEY',        ')vXrQUl,xOH6@o~9w[-&1D+4$c1go?I3nyp<%w6_|RB=V6vLha#>IbK>X8[)B],P' );
define( 'AUTH_SALT',        '<dF`x8iXRzVm>#%5idj,-U$N|)JsbMcr7S$05.S-]8eh}LdB`tzpxTFimA0W}=EW' );
define( 'SECURE_AUTH_SALT', '2 7uO#|+Z@;J@}akY/-FjF>TQ~)D=3lS=|xQ&.Rov2%D57/vg~8:Z*3sd3[ipuX$' );
define( 'LOGGED_IN_SALT',   'IIh1@ndx[]`bgp<WX2#4G*W/UBa%RXOVF0**}Y^&BmldfWT:1DWfpFYo`Wsy7<1l' );
define( 'NONCE_SALT',       'LIiYMjW#9RL?!hK>&`zh@WloPiWnvungQ&BDnMIPtsMLuVk$FQ4|nUA=ebHV|oK>' );

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
