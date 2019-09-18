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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hiroshima68' );

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
define( 'AUTH_KEY',         'VP8{j8 }bV[mb/-jZ68<z3[4L9 W byr&AUS&`M:L954Gdn8!EJ7[SQ)h??6xuXH' );
define( 'SECURE_AUTH_KEY',  '^dq]|g?XA7?(Qb`Ma!DdB+WXB#YVAC+58_~fr;<2].B&~mPPl[kISO-]Z1 T,,2X' );
define( 'LOGGED_IN_KEY',    'Di|hP9^(CzOFst ,2Q31@_soRX[4OHiEbo]c`v%-_Ak)pOkP%H/a-UO|^E+27fx_' );
define( 'NONCE_KEY',        'qUTeKE9ol Xw##G>D(es:SxSKH|k,73Yvdiu0MeS0,(bcUjMn)y_|<ruxm[#YJ_j' );
define( 'AUTH_SALT',        'e0!]JU5`p2[{m*mr*x[TD5q,@Qr&h{A~dCEy!^x^V]SJ?$:%UpfeV2OJQ]Kjsd!)' );
define( 'SECURE_AUTH_SALT', '&&OZYdr:VK&y~*Itt)6(W7T/?J* hoZ}4-b)a1a0G?!-dLkqk9?,/Hz[*4vmRi@b' );
define( 'LOGGED_IN_SALT',   '<EQOQwP,&dn(Yqwro!8xDrjpVxnpuOj)gQ4+N.1BrFhiHXiW/cu;aC&X>dcq7~5z' );
define( 'NONCE_SALT',       ']W5~/*v:/@UdmA#r#OP>]9kCPt440tEVjI|Xo;oL{*Qv$Ozw?9z.ERB= ,K/i;Uf' );

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
