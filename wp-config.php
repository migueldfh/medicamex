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
define( 'DB_NAME', 'medicamex' );

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
define( 'AUTH_KEY',         'R@Jk]ym/f-fM+R{&5F=-@U;)<p$zk,*B +Fv~+(vg7j)VWt[>{EK{!XmsLJSwZ>7' );
define( 'SECURE_AUTH_KEY',  'l;B&A*qL5h>6G*<FVDU)k$J:(G&(QPA{u(}bY;lOm`U<n3<{(FoHjJtpZ#|>Lp3@' );
define( 'LOGGED_IN_KEY',    'LU.D.Eq/_zbVQ4Y8mI*OH?&k+w+_R>XcR^SXoY=jDn5yeobFv<BBUt&irs@|:Oil' );
define( 'NONCE_KEY',        '43=-wm*=us>9;]][D?Kt%&Xa&pPD#|<P3Nx3JnJN8+p |Wc^4[OdPa8|V474B]4Q' );
define( 'AUTH_SALT',        'K8{98WW|EJcNdfsl{>E#IK`,fR2b-+x+A*`Lr4.Mhd(cS:a[9p@?[m?KZ%7_A+R2' );
define( 'SECURE_AUTH_SALT', '&tpdPHM:xyEo#w(mGsHzs`uefa>VGOx{xN|hY=14eF[MHjU%dR{w+nEvb~A|KKd.' );
define( 'LOGGED_IN_SALT',   '&>OYJ(xMKwu.sO]f&DVq^aI2h59(/4.8%!#0l/1{YC?yg<VM#e<Z>.@Iq2JE4sRo' );
define( 'NONCE_SALT',       '2dlyn|x~*/WPKC]$>B/jVpIR_vUF!/fK.n+;W=bs5[r-<N2V+U15Qc=pz#DBv:#e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'med';

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
