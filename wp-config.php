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
define( 'DB_NAME', 'education' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'aLP]gWlQ!DUr7mcg{>>`4-W4$eu&RxD! $ 9@RDwi~D[rSzQ&iQUafl;3Y=sLCA;' );
define( 'SECURE_AUTH_KEY',  '=*v@)jL!/Tr/v8Q+ iSVK|_Z$Ql},2wpBLY2P{|dT0^:D)X/)_d`v{|Hu8pyz:F,' );
define( 'LOGGED_IN_KEY',    '$Iw:.]Sj:.DlPm| uD%`82V2ba]?q*FG{3F<&l-W NG:!/kj!,4 p!>eC3t`wmHo' );
define( 'NONCE_KEY',        '=[Ha.c|a}s7ehFZEl]iAY+zwQk}(]2)~T`tr~C&b%m9v~6hc:U&wpU<e9+PrH~x,' );
define( 'AUTH_SALT',        'AR )O:!2g&e]Tj8tY[4){{A.Z.Z_Vi/$yW95z U1$f ~yGfyH`2kPdb#JIE%U;<H' );
define( 'SECURE_AUTH_SALT', 'Pzmy@T8@=7OdwLBz5x@CAqZaGcoY^B(YGPw-9e`U}06/uSS7/S,-IG5pSKoo}|mG' );
define( 'LOGGED_IN_SALT',   '>VNaw,TSW?y{=9+rm8q@_!3KB9JW`y+Hv1lj_f}YJ*fAsMoF^ifQ6UFOHeYT_u:<' );
define( 'NONCE_SALT',       '<fa-WFm=u[z7oq5aJIZ|&)2/^M^un=P_VnG&C5xXgmUeAqs,+/=?Vz*A|7Q9g9?k' );

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
