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
define( 'DB_NAME', 'stornholm' );

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
define( 'AUTH_KEY',         '_0HB45_q)o3*Bql>k%ue`sd)QR05)wMR86i,uxk;BWpPcvc$9CYsDNfK<wlJuuF0' );
define( 'SECURE_AUTH_KEY',  'PU9c^20uFp<5L?0s5 kO/E3)Ej)!jDc*=fJl>_ORuui& c?[upat,%@6Tk=:[>D}' );
define( 'LOGGED_IN_KEY',    '^vs#0BLi*sgJ`_sg/mMqK-M Uejjps;R~5vb,o##V%P^Hlh4#YF)Zj,<|&S=4UbS' );
define( 'NONCE_KEY',        'PX5%~<iT!X5~K]0i#FB,[.&Tt4;]N8Uu8s47kqv[PIIlgC1dw@,a<CoSv1M1E%=w' );
define( 'AUTH_SALT',        'b1>TY|p|@y=_u_I1XG[OzYx({QPlv%pstPB?{{hW3[[)22K d<C9,g{J>nbp!]7]' );
define( 'SECURE_AUTH_SALT', ';~N$^e9k,>eD=DUC;NUg^K<o7p<}i?8}nFd4H6-7cM?2.ChaB@W}*0u#r1<qW){u' );
define( 'LOGGED_IN_SALT',   '=oXlMg0fMh8y>G>RlR%t(4sRWD6p`aj4gW(Lwpv%M4`BRR]q`Layu_j9rY8I4*hQ' );
define( 'NONCE_SALT',       'sjDkc:GxMITGn#!BRf}:ab@?q!;9OZUO2X8Yw(?<{FcQ#?CPZ#D.v&X3y`o#Ohun' );

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
