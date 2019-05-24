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
define( 'AUTH_KEY',         'i*Aj@&;Ko8e{HZmkt)%GIb;=?x_ 0tu`I!*2Mq UAk+2aH+Ipf.sN_4.h r?>H`s' );
define( 'SECURE_AUTH_KEY',  'BDA) bukVM8A{5Rtf:%U[]NqPr[IN.J1!kxxc?@(|*cz?%)ih@v~8)(pGf*h}REE' );
define( 'LOGGED_IN_KEY',    '-Lei2rKtBNDZ>V,XLd+EQ9 H{?FeI<oiA+I7#, 0jVybnIjW L({;}(DN|z3w2qg' );
define( 'NONCE_KEY',        'mMj[B]`q$~-+|(7ecoh8!WsbRBI<xJ.oH.3`$>#@E#l}:zK&~k=aX=4gM}F4tZ?F' );
define( 'AUTH_SALT',        'R37eMuth)/#&RL(5uZ6TsX6{;tjVSJc76^&Eg[ML5w%o%8j4$]wMnO=in}G7s;gA' );
define( 'SECURE_AUTH_SALT', 'D7tH+11%?RJMd) |$IHJ|>zQ) J$Kgs]~c9LUvNs[|k0t::)W*j+y*AX$5l*a}{d' );
define( 'LOGGED_IN_SALT',   '0n%<B[|RJVn##]51bfcNf`~Cv*}nicJb}`.13aPYB/KgkFg|<K5s0hP_ib0yzZ.M' );
define( 'NONCE_SALT',       'd3mSR/g)%uYp6]wcgiwSXN_jbLYb8`htkE>o?QQ:pI>;}a8G/jU,+;N4LIuW[uS8' );

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

//debugging
define('WP_DEBUG', true);


//dunno	
define('FS_METHOD','direct');