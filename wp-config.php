<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wcd' );

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
define( 'AUTH_KEY',         '[d!H;|xv1y!Y+>2c<tD,Y@`pOwvvd_0^45BP2n)~lMHLfIia,z]Gjt=WJA!%C1[:' );
define( 'SECURE_AUTH_KEY',  'RX*syf_/;%0*`PYLAy+84]hR#FkC.C.eM#sHa+dCtbVt/;K$nnjD^+)HI __7PB/' );
define( 'LOGGED_IN_KEY',    'Y|-Zt?g, +6`-vBqSp^:5og^6mn!{l9_R.FYrI4y_JZVRkq|Oaf58:,VMbmSjHF3' );
define( 'NONCE_KEY',        'j[ST*)kI6giv$>A*s&+?ZrUct|bp&p!!o@?/c6;t2?H0J4_C7a.X/[Cb$:MO=snG' );
define( 'AUTH_SALT',        '}p.1=#JeoeK;rPdA}U04FuzcRJ#ZF((_`sNQX(txg:+FEgsyNbM,QRL-<(|b>#u<' );
define( 'SECURE_AUTH_SALT', 'B7UcLc*3ML*PSy(+vKz^zU=B{TL82L+67LDkA1IZds[ Iu;2cY%0MjVbD=m3^BLS' );
define( 'LOGGED_IN_SALT',   '#JHgT{TNkPI+m:TfkywPTKV2#]9>n~dd/*G-vhAV-L+71w:]wpM_EB.+hLS$w?|L' );
define( 'NONCE_SALT',       '[l:?;ND.gIvWuDcxa6`jNw6Z4:P84|s m{eZ&nTyj:LCo*^B0CCmi&s[Dcln9Ln_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
