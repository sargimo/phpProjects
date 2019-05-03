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
define( 'DB_NAME', 'wordpress-sandbox' );

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
define( 'AUTH_KEY',         ',_w>}* 5D:xNe/CdT6O_F!bJjV|2fe}iE)&4vyT}yy2j1Jb@_kt75f.HJ-:H!aYL' );
define( 'SECURE_AUTH_KEY',  'm:kN~Bcaj6U)[DFs&bUccRfbtCir[^E[oOAKT;lYWJH!^0X~J@/!Q>#&S:hRRTlb' );
define( 'LOGGED_IN_KEY',    'Iy%AlUg9 XXb/=t:YuZe=`5pv{rqVIN{yb+LMz=Nk~Yeqy4>!sUY>=+%#;?8dV3k' );
define( 'NONCE_KEY',        'h{w`[L9?rj4F^1GYHyB>XadTC}M5^6L(A>Dg|x<g>YYP,}w}>T4_~ZPn6&*sn=zi' );
define( 'AUTH_SALT',        ':rl69y$@RE| (([o`s^b4|(1Y#aoWOa.`SP:HK5T($E?}&#5Ah9UO(EjJ0ho)aPG' );
define( 'SECURE_AUTH_SALT', 'dZS.Ljd.yU[jF$Tk Ci$}2<A9wy%*1>%qN3jC&-jJ4Y`[;XfG=tXfR/3%&;D4VUz' );
define( 'LOGGED_IN_SALT',   'Fe;xUZkIxKChyHx?#-j|v0I.gS`Q.lYXWv!R?0.[6>]?2;8B)+.xMGFa<Hqd*^d[' );
define( 'NONCE_SALT',       'u/HIiIEIK+BNRc2c}K6ALN}n6{)@VoOy`13]m8sST46DcM4Q!o|urXG^d>F~oE n' );

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

//permissions
define('FS_METHOD','direct');
