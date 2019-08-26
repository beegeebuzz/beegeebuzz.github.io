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
define( 'DB_NAME', 'biodiv' );

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
define( 'AUTH_KEY',         'fu:>*Z`5`:IvRp/e}atUQa1PDbnCqCW&!M<DsuXY[$D|oz4ls7(P`~<8_bOky>ah' );
define( 'SECURE_AUTH_KEY',  'AAtt?6>fNQAh:@.n&axVHHqEWe`%^eUqlGT)G%<g=pV|mPstrKi!=3/u{P-{s}&o' );
define( 'LOGGED_IN_KEY',    '-z[DDW:^Lzb`4cunoR<[Rl+$wze2oS(0G,k!;@2dp`nH1eZ 39Ve~;7!2K/UZ+6~' );
define( 'NONCE_KEY',        '~DlJ(+FKkO#R7dv@SP{4GVRH($%-(oG<y.GN~m;7pw!;)T6@eUMnwIbOs;iH_>0~' );
define( 'AUTH_SALT',        '.zq,HV7veB;?YGvLJ<k9]<V1Psl-92RJ%)Z%w4(xQ/rLVm3(-)Orayc`A5;@=_]V' );
define( 'SECURE_AUTH_SALT', 'q6)OFn-aWWPV${L^E8$mOT?a)a[1YoQ[r/*~wvu-o(e(ej1Sg& f:Yj@xQ<7Aqsg' );
define( 'LOGGED_IN_SALT',   'vX;wpK(;=S+f1#mb5sg@1#ogKRE=|.B#<9&uwA#e=S}=}L6$X$rT^V-:`]rEU4hd' );
define( 'NONCE_SALT',       'bMH)Z^!BnC1Vv@/b$TcxTsV}Cr&8[)hj@_9`~9yz*?N(7{Pss0hf2tvig)7:a]~C' );

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
