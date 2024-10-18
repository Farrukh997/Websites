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
define( 'DB_NAME', 'chlidrentoyware' );

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
define( 'AUTH_KEY',         'p%pCx<0)ZJZb,~4a{kp NitfShSxE<.Sj}:G<.$G`/vDbvAHH9W6wBh566#%,2;*' );
define( 'SECURE_AUTH_KEY',  '/mYUipz)=Qtb.,Zc/F(v|Y$l|G@ZMh8j+_v3pN~~NgZjyzp6,nU.3.-fwU@li/6#' );
define( 'LOGGED_IN_KEY',    '|K~iuh!EC6k!Cf,OaDp06C+zas@jj3rH~kKro|u`RAMU57GA9?mbi<jg0[H!AS2y' );
define( 'NONCE_KEY',        '#Nm7.gc?1u&O`.+N{gGNBjcEv3B+vO/3=TxR<:9u>v}Q;j1xZM5:Exi].03s)@|,' );
define( 'AUTH_SALT',        'U)&`usHY=J9]/)h3cfwm%NOv1jn-5i@ja9]`BdK,+gzZ<w?pvM<?lY~D1>L;*(}/' );
define( 'SECURE_AUTH_SALT', '40BERe5=JDmu+zXK2)q]G*Ry[k^%K33H<2~%ce66Acc=9)}E>8YG6,]}JU}ddQ|H' );
define( 'LOGGED_IN_SALT',   '13.]&X)ojo8fMm),r6o(A;}7kjLHAVz`X:/jon@8n!p)!b-3xLzYYs]C-1*lUSn8' );
define( 'NONCE_SALT',       ']6sZOeX7b[51s91<5:JWsf`wRg?v,o~Uh~m2#hEve2*|Px+kJ{F^%&cFdq$OV|M1' );

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
