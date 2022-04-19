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
define( 'DB_NAME', 'onedot' );

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
define( 'AUTH_KEY',         'iWig8uIc+7{6gbAX#krwnWnZ]0U:.ojQx-wf#_F|)o7=fGVtU_r{>RC[v.rY]&=%' );
define( 'SECURE_AUTH_KEY',  'MHgX{}ZEf8`ApS9XZjtQpf2]WqWPIMZ&>tev64yrS+?WoJHU&0H$>q(_aDO@oXwq' );
define( 'LOGGED_IN_KEY',    'xIOb=Vo8@e =9%loWGoT~ocF#{clXS7$U.fieCY25ATI2pcG#T&^ n+YVgDka{B=' );
define( 'NONCE_KEY',        '`gxX4ekA!_j_^+iI_,8B 3D!Ct1f<S!H $:iL5>o2;:=A4**]8#4/It V8W7] /x' );
define( 'AUTH_SALT',        'Jv${2~6d^cV)vY5PC} J_!TzQIT3XCqQ0T TE^}C#@w97^=C[b[ol =Z/B.U+5#^' );
define( 'SECURE_AUTH_SALT', 'Hbf_S]Z<EJa%JRuR/p9GG]t8)d^6!EcVt&U)YJ*FKQ7`OTG(hN!VGM4wH,E5ovQ8' );
define( 'LOGGED_IN_SALT',   'u.~{,t#9Q%{b0<89)LlW+9,e}Z}gpcAo5N`M);y[3h#GB<cMhUKv%.]Yyh^Zfre*' );
define( 'NONCE_SALT',       'IG @.EmY2|>dbldZd4`7NR^l^ <7U[LshC;3S%gC3`u}vDQDo;:coSk}pU:f}NQq' );

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
