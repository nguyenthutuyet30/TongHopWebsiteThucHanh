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
define( 'DB_NAME', 'wp_banhngot' );

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
define( 'AUTH_KEY',         '0%1`qFmu-kTAJXv.f*@)`P*`8b6{f`kx4<BV+*RM7pzrS}g+S!2tru&ZzN0E&b[)' );
define( 'SECURE_AUTH_KEY',  'Rl;pXTRf`ZQ$VxHyBfZ{552);y94^uV:^3PY{tuOFs{{wlEY+0}o$/&]xMC(-VR#' );
define( 'LOGGED_IN_KEY',    ',R,+M4ldE?<i]:6~~CRn.Wo[d`HS6/E5>d<8; @^E2 /}$}C^+!_w[dSbO-ZT8jq' );
define( 'NONCE_KEY',        '|T9sdG|^6 ?pxFYcEf`?bV*K4eC;on:zBI^]Hrz;oFk-jbbYm*+LVoj<$sGcYz5t' );
define( 'AUTH_SALT',        ',oZH9(GX,JKFhHa=!Ar/e#3-p*kex22,zs<}fmLBO7FV#13Dh}TK00$-lb5G`UsS' );
define( 'SECURE_AUTH_SALT', '*Q?S!`9dzro/1%I<x|u:JR!;2VTxc(h~-F^0N>WFb~uD+J-@E,f)`t]%AN3`r%fr' );
define( 'LOGGED_IN_SALT',   'KR@q1_1*=vUXpF7N7g&K>0SIiL{x4AQgOHT[/?zDk.91nw/inML{}({lyw9Bz0z;' );
define( 'NONCE_SALT',       'Hie-Ow*A/^mEUe/+o:l&NSeVYks+9HWr0#5_;4P]GY5)2;SkAc4q$*sq#0>},7o3' );

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
