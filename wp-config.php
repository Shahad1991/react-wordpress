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
define( 'DB_NAME', 'react-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Zinha;hWM6Gdp)g>fu/><(3DN~T?U/,NE-GI4Gsa{ou/{]H,Jw2EqYQ71fl]+]tr' );
define( 'SECURE_AUTH_KEY',  ' d^^Y3^_@*ps^d.ENhu$nd{Sa;VJ[( oabcn( |>]]&MBRs1@AtVCab0?KQQm~FY' );
define( 'LOGGED_IN_KEY',    '8uRM+XqvzP!pjZ@$/2yc{OUo_ [tuyE|,6(V1y,1Fw3iznM.Ra]FE*E+KS,cu%*t' );
define( 'NONCE_KEY',        '[L[reD{*2J`cm>}`^0m*,gxFI?3Fh JqTgV:&y%Vw*8.z418<*&?16ic1:s@[wcM' );
define( 'AUTH_SALT',        'G5M4!;IH*[h<*NmX$X6pV{Ch#H]jx/m?{0S{}jEABI~=3l?vTH(STN%A=^W<6)>g' );
define( 'SECURE_AUTH_SALT', 'BiA?D5CuZE%/d#[@%O}&)YfPc?&q0*}:|Uud,Q[oZ4Iy1&&KM>rVcP}ott[upZ`]' );
define( 'LOGGED_IN_SALT',   'F?Rv$%*SLqvE7nY!okRqX#><G!gX!}&k[8In0VfG`D$U(6@EK3Inm(+^r4cT~gm5' );
define( 'NONCE_SALT',       'auFJxR>$^A2^C^PZ7wYtf}Xn|qDUGBFe Yc2k4=u?ZsS+b<hO#qc%WH8ym,^|`RP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
