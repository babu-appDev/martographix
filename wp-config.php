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
define( 'AUTH_KEY',         'VB:GBiuQ;GUb{^|boG1dYhIC4fc/Dl~|BlRxuc^Y-awTx<8>tXrf,X7-+* K9h.%' );
define( 'SECURE_AUTH_KEY',  'i@Q)UA8N*Q7_Q)MBZnq!dJdW)gE$Iwlg%D6g?]n9rq#xyT!hL*=^+~a/0 qp=p/;' );
define( 'LOGGED_IN_KEY',    '&R;Pt^5)L1-F+OP>Fch$!0,gE)P=`D}+L]52 cg9 vP9)b[uTUyK;~gc3)1^zd{ ' );
define( 'NONCE_KEY',        'c<)Yrmm,cl=by;i:b0fqk/eDKUA]di!8Zawq2`ltHx-^r]EqGdD3dniEj[~Sxwqy' );
define( 'AUTH_SALT',        '-JR]9se>VSyw!S$U$4GEdCz<P7xr1;Yc=*R[8*H@9)$,%957,cX~w!ZX7iWq]oMy' );
define( 'SECURE_AUTH_SALT', '96L+N.Tx?R+dKeq*4WoVJ!1M3z3{kGNcv#DU^WxQBb;;vfANFgp:wQ67aUyQ~?+j' );
define( 'LOGGED_IN_SALT',   ',P;Ts>_[pQ)<s5wSIy+iu:,&$DEH7ZgD5KvSD1{A-()U_tV;.3fI*s;~Nz(cBQe,' );
define( 'NONCE_SALT',       '}jFA=1~(eWBhki4yL<UK`J_L6Ef-rz 4BdI1eRFDb&E4Uqs*BQQ6BKI.?d!Nwbus' );

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
