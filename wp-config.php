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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'h*L6ICK,8Km^Q:q3_U~3*^f$W(E#Osw}F$]3AZy;jD:h1%e&O9GYHBh5!DyM6&b{' );
define( 'SECURE_AUTH_KEY',  'Po!WK)0SQ4[kEBvHVZ`N!,?hP6pi;.BtR7/|86MqgC8YEwx<VFjdZ[%-6ODW+(/P' );
define( 'LOGGED_IN_KEY',    ' |^wD5GM7?AqCOTMiolSUF]peeTKPXAXH?sC9XqZ#e}c:Z/9n.S3KQZ+VmOz9Ig.' );
define( 'NONCE_KEY',        '<MOX0;mMt+I??M;S5!,~D&_=WeA<&Bsqy=c*&H&<,0ph?O1_%U#>$p`a*NqdiWFN' );
define( 'AUTH_SALT',        'I`aUWh+G3pL6.hlW<kA)D>|<k,nHoO5q7v4Msl[s{,e|c&So6XkUF#c{Nu8%l{*m' );
define( 'SECURE_AUTH_SALT', '`8r-oX3h13GDI[e <_c$]I?Azl h*`{syy?905#=D3KC1F{7E:J{/!,7Ss-sqb9d' );
define( 'LOGGED_IN_SALT',   '6w{imYA(m%62SN p)k.ehBCkhJ&C%2Y(TJm))}J&>6YH.GyJEZ7=)B#iwH(TSp_m' );
define( 'NONCE_SALT',       'tG]}N?G2T:l)n~vWt:)C:eU*0A4XdfpI.u@x^z&nAzk4FFMLR^qJv&% >R9#A IH' );

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
$table_prefix = 'pf_';

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
