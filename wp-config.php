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
define( 'DB_NAME', 'heroku_7efc49c06adf3a3' );

/** Database username */
define( 'DB_USER', 'b57a6bbd298b8f' );

/** Database password */
define( 'DB_PASSWORD', '20c89ec1' );

/** Database hostname */
define( 'DB_HOST', 'us-cdbr-east-05.cleardb.net' );

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
define( 'AUTH_KEY',         ';gT*Tgo(@UIe[g,}H|R9zJY$l=m-0q}=cJkaX=RWVzmb3*DPq2IOn#A~]Tt%-kc#' );
define( 'SECURE_AUTH_KEY',  '4H*Wmtp Rq3k_`8-{PLnhI+`dGXpG )Y:+b$HO0yTkDM1g!{Dt$;7b~gEFfDul! ' );
define( 'LOGGED_IN_KEY',    ']SV60?om;POtx`}VsJR@4wumikH<~XBGu<.jc*_.XsDbTX|/,h,@* $S!xsg/-.)' );
define( 'NONCE_KEY',        '(GgA<iKI^AC+G!!TlG *N3s&2}G&WQkdqcbHuC=j,55Wy}v:x&fogzn xP$~gQ{P' );
define( 'AUTH_SALT',        'n O gce;hY=_hGkGe(/ZxFvcJ5P;FiNi7)o>5%UT=[fl,QN]9J9]>1Cvgb<q2-=N' );
define( 'SECURE_AUTH_SALT', '4B>$S/?G>1t-,;kZP)mTVZlTi^^}z`iEgG@_ yZwQXdOal/r7Lzt3<b5y8J+;(?A' );
define( 'LOGGED_IN_SALT',   '^KTC [j0B}Dkln8zOSPgTOU3U@QjlruK=+9dbBBp[>S@0~0P3BC<lN`RMO0&Nhra' );
define( 'NONCE_SALT',       'h}8!,I8ErB<.HJMWl]cZ1#Ei@Vo3W}<xI(>Qr)eqNxSPE{rlH/d|CA^<L-@w=K<P' );

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
