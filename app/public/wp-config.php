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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']b|l4W3dhZ>0u:Qn[c%j*@~6t%:H;^R$;zP)~a8 .g[+:d|6iJr`K5_*$z$atV(w' );
define( 'SECURE_AUTH_KEY',   'Rrz!_Dt{`_#(9v)zOvD+%p/{mu|8>3Lp)Mpg*V Vt2o<)S<1.@}gLCAa%=WSGQ2e' );
define( 'LOGGED_IN_KEY',     '7@}hD|o1WL>R$cGrs(<q,O_Q9jdq(9H+a]%b]z]St}X/7+1 8/zxiJ`g=}86qzi|' );
define( 'NONCE_KEY',         'ZPyrB7pA%kcRg]Y%XqsIoOZj^<CSf*XA?[j3,/UDuTKY:|QWk+O~lB:ng4z4x)4$' );
define( 'AUTH_SALT',         ')Q6Q?_R04d*k-0A;5iId)Pnw2|.c09LKm ` b9Crad@tA/if;8[y<0i~3TqfZ9R:' );
define( 'SECURE_AUTH_SALT',  '};R{Yw~9O?[c5P5K{*4V-f?ki]=v^[q]VaO`S4qBIRQZ*7.0(/Siy/6rtc DlE=1' );
define( 'LOGGED_IN_SALT',    '>F hE#qD~7[Z=E5E?,e%N_:t3?_4lK:2S>B35C6{(Agf]jggOh~;yVA5~Uc0v8-s' );
define( 'NONCE_SALT',        'HMbW7k5Av|q7nc,=y)c0.rL%ecn]lUp[g X*j<m}z|06)FXj4S_^?<,sqiG{v])t' );
define( 'WP_CACHE_KEY_SALT', '71;d#&]!waa9DBR`BM<prKV/%POJ;uaw}=4FaOe<5Ndy%:A7V; h1$$&sj`yoV?B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
