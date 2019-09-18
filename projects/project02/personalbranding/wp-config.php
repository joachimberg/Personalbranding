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
define( 'DB_NAME', 'joachimhberg_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'joachimhberg_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tyc63pkn' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql101.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '1sn|Q8m/X@XDc)5(y~guNMX35wk8p`JynqCd_vI}/oG<meSF1f99HV[)Ez:|a :N');
define('SECURE_AUTH_KEY',  '/;+>w7<XHVd_dSzOJq_Cc(=RsmSvpvc~1@KtCREUxGYW#QqqEJE}3>^fxh+MDuZ?');
define('LOGGED_IN_KEY',    'Z0,)y~CZ@oLN/|Ap|kO1gbLAI/w*$(WP+<Xi/f;p@$;%Q}[c,f[h>d=qn $oopZ7');
define('NONCE_KEY',        'cm.,#/5fqPx3.}!Lpy;H}cS9)~OPCR(x rGp1T<~}zZ-6U4&Y&,W6W*oGZ9%kB*J');
define('AUTH_SALT',        ']2DK( W9Z@*wduw97H.^/zx=W[|[_?|?Ws2Gldzg|7jtp!?mlH4r/j TPk]{Y@h^');
define('SECURE_AUTH_SALT', 'G;VU4<Qv9(qUgu+6:oHs[Y<}=%mHIH3I%!8%XDO/iRt>(&=[3+&.HU2-9c-q5a-&');
define('LOGGED_IN_SALT',   'y!+utO=;ytGd g^&RPa<+tEgW<L2<0HAcJ+i;=r }_7?%NmHIRpe<z7xjqRG!GO+');
define('NONCE_SALT',       'C|@_0I,r7x(`MFH-s-6Uj83v|,P|f$Pgg+?1oW&L7v+,>h:P-h9,]T|SBn^I04A2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'personalbrandingwp_';

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
