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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intervenance' );

/** MySQL database username */
define( 'DB_USER', 'intervenance' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hx7qIGmv' );

/** MySQL hostname */
define( 'DB_HOST', 'kookline-dev.niwanet.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V]R7nxNKs+^1l-Z?`12(Fm|R0*,)j^4lZsmd@,]-oaJ#)q29,*a-h0^5;ZRm XNk');
define('SECURE_AUTH_KEY',  'bO;n4%q~|LVQW/bQeyA|]i!wWBLqkf}khlH).e7g7n;2W yNt.Z>s-h>p5ZcxLa5');
define('LOGGED_IN_KEY',    'vOgcBNpoL4_+&pF+LXJ Ab!x7YhA^ryAvai%1P*@S|/wyY`p;1@(P6B2V>-Dd;I*');
define('NONCE_KEY',        '%ilTj+F,0(7x11n)dv#*ogor72ho)UDR^70Q]@[F.q7|K`@b<~-g)2g=;q/{xD`8');
define('AUTH_SALT',        'WBSB/GR%0GOYY[wCR}+/J6s$F7+Smsmc%qNk4_bOM3uw$OUTLolbeiF3v;-fA:yT');
define('SECURE_AUTH_SALT', 'q>:+fv.4DHi Wq/G..|dUP~P/HwI; l9$iyW 8P]Rul3.],uC~ca:I|[qRBnsZJ4');
define('LOGGED_IN_SALT',   'b(m$y{8+l$N>4N/PT}vdKH!tn]Y0U*&a1$ixj%9.,J+Jj/y]e+_YtM#tg6@)`MzN');
define('NONCE_SALT',       '-mitor!/ oVhBY$C) zsey3|y/aAl-SpC,u;p6oSeSI0-1IY)=G3v;OM:172XdrR');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
