<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qhdJS`2)x/<!gt{OKE8NN=~ouo;<wos^~Pr]N5*2@o*/2&0~-4Tr/(w$q,<SeJK:' );
define( 'SECURE_AUTH_KEY',  'W8N#3;sDNxh^g~e&uGJ<,|&+U|SDM!jiW2K]zC&|]+d*Ebs@q(kh9y-wAk#B`.?=' );
define( 'LOGGED_IN_KEY',    '@[HC5ipAc}hWL#yMns0~dzCD^rhp{m9g[% T2ve:Us otuKKDHk}mkQLJ*},2 @_' );
define( 'NONCE_KEY',        'S0Vpu(K`DQF=Ams4IBTD-zP=sI6Vu_pW}k=q?FFh=%(?}i1!?0PlmD1PN*){}yR%' );
define( 'AUTH_SALT',        '6ilv:2=|CSG9LGlY-cWUH4Fl!hnv}R[i1=/sL5v,:];L0gjLOm0O^h;H&35tkE9P' );
define( 'SECURE_AUTH_SALT', 'XnDztQO.Zw-)6UNx.E}S05[ f8]oT$1B[=/Qu8Wz!evocCHj@JSRPiaNc$]<ILF_' );
define( 'LOGGED_IN_SALT',   '}$hum<8TBVNy_oYh3m`x|~Mt3G2y&]HJ#0/;HNvdS>!Wqg%aP8eDM?8KVAYyI$xp' );
define( 'NONCE_SALT',       'MC$G=4;0s+7f#&cw7cl.o%;K`}&l& N*01QK{G`l`|xht1U1D2U0#g-6@RphDPm_' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
