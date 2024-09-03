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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gipwp' );

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
define( 'AUTH_KEY',         '!Rv5|HME^=&YH+.<t{#!:Km3=T(a[s]%,;@Yt()LV%T9P:s({bc!q87XY(o<?xjs' );
define( 'SECURE_AUTH_KEY',  '[dy3%]Tf;EBJ.kq^trc&|igid|ZKm(8gX8M9bH-#}il/Qt7[`lN:XR#2zHD~3(1W' );
define( 'LOGGED_IN_KEY',    'ny`3LA0&_AQv/.2UKgPA6R:t&j)zza>&D.@{YZnHJ&;=HW+<5mp8#R}?Wn{I}J,_' );
define( 'NONCE_KEY',        'Z!rTI]hYq+<CO53ejjdgg]JE%1[/r|gyS(8?*X!a-3!%PRxry2H0sm27g<b&>Ub1' );
define( 'AUTH_SALT',        '=pH}ETZ$$KLx=(924/}?DKd-jQ7rtE$]m o]C[+:>/gq/6D(_9b@D(2FsTyUf3>u' );
define( 'SECURE_AUTH_SALT', 'Me1I0wWZ1?: &m}59O*UJ6TBYY9u->~?YB}txRx;a@|892}3A#%eiL*b{DtC?:oV' );
define( 'LOGGED_IN_SALT',   'e,=(Luz0%,==Kj4+n?;$o}h DOsdfN`TOdZKMm?^Z<0w|=OpxgR?E1`#YIJ@0,#2' );
define( 'NONCE_SALT',       'vIy:5{4Rn9ne8E#p5_ib>%CDIE<UK0r(ICR*0F#q8l/c[kK3`=O2*uy>Z:G]46Ev' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
