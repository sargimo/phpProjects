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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'the-pirate-bay' );

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
define( 'AUTH_KEY',         '.7.sEd15JzKsp)G|Z_GuRq=Wv;6lW|1oLWq%EY2,]jSk^Z?WH<{yMh5d`c8e.]eB' );
define( 'SECURE_AUTH_KEY',  ' =/q`R^,2y9U{4&78muDBb&t)$XY`g~BW9L4ZJINCgkftJQb//~ Ti,:^X:s#wW$' );
define( 'LOGGED_IN_KEY',    '>nd+}tW&Pn6t.EY*D/3`(?%kLvFx2;UnPnrS7OT)|oi@Qz?hV(!iI_7Aqw(+<)XB' );
define( 'NONCE_KEY',        'km5cD`J0&?&U@+V34mOnFt0K9kr|{{xI5YS|G90BKRs322I>$ihmUHgTI)#hQD+p' );
define( 'AUTH_SALT',        'P!yO*S!73;n9:v,WBZ01]rq<MXy`=DbTDb=J2`q9F8]u6JFIxx7aQX8<~7ZURorx' );
define( 'SECURE_AUTH_SALT', 'Zl=+eAnnA2W-FDG?[p75V1Hi-5/u=,xc?7z%G4_ouv[.{F&G`HQ5`UmotyYW(ryO' );
define( 'LOGGED_IN_SALT',   '$*)ec@=v|4G7gijjGf{}OvX=a-hD[!&d9gIlyVWF,-+MtI!n~d081rhONuK!_7l3' );
define( 'NONCE_SALT',       '*4:+_^MPen$E1);wnc9-*gMV^wQ_Xn5shiWYQ1pvQ@YF2xw7o:$O|>O$V9n!>QCd' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
