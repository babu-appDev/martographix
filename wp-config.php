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
define( 'DB_NAME', 'martographix_db' );

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
define( 'AUTH_KEY',         'OMJ>#E9o7l11K|L1i--I1ielwmyG=efH/<ELdQdet}cmHmc~W}BPJ*b*.=0*[>g]' );
define( 'SECURE_AUTH_KEY',  'JW*Xj$QQE{a<O @*gBP-_VDq3mVSwo(7TfJ=*F|r)|BH6S-xP^m#,FZ=v5u`+r$H' );
define( 'LOGGED_IN_KEY',    '~|auZ.t^M&N.-e8yxe9/bsy}^QVoX)sI$qWU*9$$dShcJJ)iyEW+`J(FU-.q?on<' );
define( 'NONCE_KEY',        ')}UIhK@kJeZv5l2=`zuD(qP9_~JL7ht=_E[3R`DuuT65]V#K^WdaYe%&Xk:^kRtP' );
define( 'AUTH_SALT',        'y:t~x2OIapA^wVlQBo:6NXwel@cuw.k])d=*!+~~{q2TI=?bMjE.$_<R*vA2jEgl' );
define( 'SECURE_AUTH_SALT', 'mUO0F?p00/Fp65Q^d`CG_cb/gOaOd3cWKm=:=Ab@=r`h:WD5-|`Mze?N_j<l5^8#' );
define( 'LOGGED_IN_SALT',   'S(fqi,|X#/C3ow[)<OVBrm5Cw?8E?#4U>Z5|UHL;Vpg(.,@4gfqQ#.|hRFA8T|V7' );
define( 'NONCE_SALT',       'SKGwLD8#jUvBN0KWC[0Tzsuhk0=h/4,0DwPX`+)+.NO2}OQY3VT+vecYhlP&/L3,' );

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
