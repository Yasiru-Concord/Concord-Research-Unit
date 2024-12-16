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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'user_1' );

/** Database password */
define( 'DB_PASSWORD', 'VEGAS-BABY-VEGAS-$$$-BABY' );

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
define( 'AUTH_KEY',         '[11+BqG|X}j8^bekx&MkeB&VH&bN^humL|,/|q}1k;c.#B.#/jzMUHr2;CacLH.h' );
define( 'SECURE_AUTH_KEY',  'eBOsygUMmj=A*#=^X%Oh%slN>->zkQ&8~-CF_3r]!q8&SK,CrQI_>7IbR8,.,vK;' );
define( 'LOGGED_IN_KEY',    'pvC4^qd=R8LL3Q7uA`DPY])6Y6fo(K!% OmI)VIne=n5ba;xC2L.,%)yePu#@OYH' );
define( 'NONCE_KEY',        'y>L9aVvuRh@!Toeq]qrDUQ5t(F^A`Nr80rpb1.*C,twq/v:jK9$2]([/%~es@+A*' );
define( 'AUTH_SALT',        '<]0xoc2c(rYUy?J0Co&5LFA}31{Pr5T-Lw9E90,a2R~>%5&C+&wI=}*QCWbWO%-l' );
define( 'SECURE_AUTH_SALT', '|f@AHPp2M@y)r:5^01``t;JD<^;8>t-E2uIZYvd*)_%meaz^9A~ECW*,*1 @xr@_' );
define( 'LOGGED_IN_SALT',   'bgu9yDq+8:600^8jpuR}Bm>Cy)oky4Inz)S77*)nw;enZ.v3$|9k.jthB-ex0~p9' );
define( 'NONCE_SALT',       '>DTTE*dY*<hx3`S).:T6(=8=*@W!5.P+*O[&zD!83ij(xUd}_^4|hcF^PGam|i#F' );

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
