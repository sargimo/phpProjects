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
define( 'DB_NAME', 'wine-theme' );

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
define( 'AUTH_KEY',         'QRx]oZNA<tUH-=Td cPY:l)7.FKZcgzNt-^`wn|h#~B&j*QFKZ^;i/,ubm@NKZcB' );
define( 'SECURE_AUTH_KEY',  'KiGYeuL-Wa?qr>Z/SO$jcp<F.Z+Nne~G,)@<WBIYn-DZ<+Qtc%eRLCb6^5zeU5@{' );
define( 'LOGGED_IN_KEY',    '31Zzu[U=C:Smt[f9Y9O<e|rUUd@~s/+6GtarUQYJ1,9{I5g bC&8kx?E{]B|CuGP' );
define( 'NONCE_KEY',        'e1hgx}}?47FYPF!?$lvx*zb&I.WNH DgOy)g@j-3l!Jp17L]L7LxG ?moed5F|vA' );
define( 'AUTH_SALT',        'Sl^Qgdn/mfvb9t_Z1+<Cqr<Quzq$3?O:bWX2%G&H7=izihrfC3$:3t$LeCnvoi:(' );
define( 'SECURE_AUTH_SALT', '><_!UNe_IM)[8RJ.*b/U3x+dbUrR>1WKH;J@-GGNooOsBn-N ])*PP|?X)/M]O>=' );
define( 'LOGGED_IN_SALT',   '%[RI!6Ujiuf^7/@?YJC]`V=;j2<0}[`M:q/(NR$wuf`#^y-dI576p*+#!(:gyu)$' );
define( 'NONCE_SALT',       '0WQLDi)P,,[pfI}ko(ZS[{Y@E8$C*W})mT>xClDtb40JJCd)J-JqF=<zsv=)1)$.' );

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

//??
define('FS_METHOD','direct');