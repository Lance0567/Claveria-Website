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
define( 'DB_NAME', 'claveriadb' );

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
define( 'AUTH_KEY',         'eF`;!u@bsf#N-0x~qv2K$.or6tW;RG*t4*x}Y;%rt)C}0K|nDOd]?u,oI?kONyg)' );
define( 'SECURE_AUTH_KEY',  '*vLMFC8W:NFDU(} ~QO&L9W=-Z)~h#S:BY6T{R/E+sQ^emoq?<LhO2 KlD.sb~3|' );
define( 'LOGGED_IN_KEY',    '`>:sRA!cy?BTlgP,nnHQ|Av}%Q`ygtFLC%+56a`2ry^FdX/N7q+#tCe^*~s &YsM' );
define( 'NONCE_KEY',        '5IWffJ^AtpYY][lNQZdME0xSOQa_4H@U;iG:6tz7[HL6aqOVEv5o=H1[!wC<;Y8+' );
define( 'AUTH_SALT',        '~F4I_l~F7.2}Q3,&=GnlKq?<4XzCDf/rmDQ>8f!ts_PcQS=)~mjw&_biyl)|tyJo' );
define( 'SECURE_AUTH_SALT', '$~phcTA<Dzku(65hk+!H,>I%[Uzsnn!UR0zo9hi/;_j*e_2pEbR)/I;wp*Uu0Sh ' );
define( 'LOGGED_IN_SALT',   'GpjOc(#|-?3sCuU_Jd9?+p[g&&cU#=X_t<OIR5nahuP KAX3`84yAPwQwB9Xr1@D' );
define( 'NONCE_SALT',       '=)L9{97{(<|f(cJq}XGQKt)e3YTs4a4mf>d|$.&xnR%D^5xkEUbG0+S- ;d;%Xq%' );

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
