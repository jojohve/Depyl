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
define( 'DB_NAME', 'depyl' );

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
define( 'AUTH_KEY',         'SJ__h9sa-M4$5<[r49$N*W%Wdt$>WgxOoj.gJ;|^|uWddDe9},3IARe|>FMcKi<:' );
define( 'SECURE_AUTH_KEY',  'VIRYas3whjzUXz(v!6FHtiQy@k#7PH]]P*b#[#3Phz}}}FP(bvfdr#mdzhCC-:S*' );
define( 'LOGGED_IN_KEY',    'o4al_OHWz[c]g6]$<El>GB/CL?>/Adc>29/O^LK .SJ&c?%y!s4Ipfy;B]t?_X8W' );
define( 'NONCE_KEY',        'm,MvDYt,Y1$dbQg%d^xxa);Kv8%%|_D6t|*6B{!VZadaty>;jO8jsZS&(p#Z@ZCo' );
define( 'AUTH_SALT',        '@}#o3I:+~&r`X~v`6uLHwR!)8~fs[)7t/d9=Hcy;f*5Mz[ m*;JL/`8Y[+ISz/8#' );
define( 'SECURE_AUTH_SALT', 'c@FCIBW :`ZXk1gTEKKA_TI8b-SDf9l:%<Qon6c$!uc2d(&J,p*D21~K<T.|}Y4-' );
define( 'LOGGED_IN_SALT',   'NVkM}>g!h!5b,soUk3$-#pd@(nETDH!hG_Jl|a~0+VdSoh)!mgX,Xj#!aCa~n#$a' );
define( 'NONCE_SALT',       '7Qd!R!m6,M[/ bJerfiu-tw,]b v^4HL(MO-1Smtp9y*(0:IGJF));9oajH-JMl?' );

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
