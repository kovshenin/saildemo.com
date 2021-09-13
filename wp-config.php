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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '2195P4j4xJjIBngHm7wh13jbAORPuYQZIGSvfidzabgS9whd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'S_z92m/xZKY(TY=YS[XL,r_]gg7i$K4%tl0IR3~a{@SG=#_Nbqkl_PIkyU/5Q1Ax' );
define( 'SECURE_AUTH_KEY',   ')of$dyJm/mAPC)-&LC?^ov|*1.Axex:|Y4[F:@T|q~Z;=lGwT0O*ro@;R,<I;uAU' );
define( 'LOGGED_IN_KEY',     'nY&f4mXX;!nLutYH*DVwMfS;I;EgdN^|@M-,+*Ga@i?$dTJAQ)OePg=ddkn%<HmO' );
define( 'NONCE_KEY',         'Dd,/@ddI=Q7kNG*#4Ei3SrRRn,VzTn7}w64%GHFjc,T(5q$jo(i`mYq})& <*d%M' );
define( 'AUTH_SALT',         'Ie&h*Nn<+fMX:FybH~cZeMRf9HZR/Lk>g0Eit3uR~XAdJ,ud;ZAE{o&>03^U|wx*' );
define( 'SECURE_AUTH_SALT',  '/U?<<A;Qzev.()T.Q[AG-K%Jb<I;@{Q=SZy-OLI~x(QhH*WfQ91f1 ^p^Q~kToY&' );
define( 'LOGGED_IN_SALT',    '9I,gwN=l`,mc/]7!~V2WxVRD9RW+j~mGi<`SfJ_r?.)NAE099&0G[l[UBqy(dt9r' );
define( 'NONCE_SALT',        ':K@6R}+63U!Lxg6_o8F0S*x`gI)r7*ZRX&.E)Ol}QQN4kmtUyoxliM9K;e@,7bwY' );
define( 'WP_CACHE_KEY_SALT', 'XjO%Jo.hRb3Upa2rl5g}9B>S7;{F_iRf>1Zm#|y:5&#8U?#}J2bc-i=jua[Y&6k ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
