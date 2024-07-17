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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my site' );

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
define( 'AUTH_KEY',         'w-5T(8inmKx5Xh&+%}DdGp}1R!z tr42n%6-#bJ@53aWW4w+-c!D[xdJeL<1rE`r' );
define( 'SECURE_AUTH_KEY',  'P&S_j<3I?$@?todDd&^>DE9I2!NlM8NE&*xNsy|E-}G]o#w0?5M@kdp)#5@pkV6G' );
define( 'LOGGED_IN_KEY',    'hI@F:R`@NqG-Q^*kOi7xkK%ARteCuD<o.Fc>Z<?c?s4:ZoTBWgo%z&H&Y5%RrK(|' );
define( 'NONCE_KEY',        'EtwWa}n<:U3m~k2(A9%ZLbOLa1 LpP4qGf29hD}O65WLsV_~9-+Y4>cQ$0_{_UzN' );
define( 'AUTH_SALT',        'rW!Oxm4(*!N4Xfb(?ZFavo4kp^GPKm$mm{K*X[Jv;@uZr ysOe`0yog~U%+F) lh' );
define( 'SECURE_AUTH_SALT', 'aAE+fByQtHZ{<cgE%K,t,r^Ak,VD^pGOURIMZgTa8IK$OI;rI<3+64JU&O)KK7dc' );
define( 'LOGGED_IN_SALT',   '21Ra|+wU#zi<0f|pBp[!Tz00A%B<PpznOIpw1u%4mmvjv.xG(^Zevd).}6Q9oOM?' );
define( 'NONCE_SALT',       'Xs&qh;3MoGZUO,)EG.V0#y)Y|:rRXS)v[<:[P,qa8<,Al,^y*%wU GS]@xCk98s&' );

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
