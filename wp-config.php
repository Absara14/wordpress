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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7+uUG|&nY_kw,p43=UIrYOCY(A3tTI~:23W*jfS@o7c2 w_ULLG`|)nA!]{Tckg}' );
define( 'SECURE_AUTH_KEY',  '3{lcrzrfC..7k^4Md;*B@C_U8EjzSo6EPJvXK@ |iz4|hxe) =T$|!t $^-l3&s2' );
define( 'LOGGED_IN_KEY',    'Vr2locIC.AV.%Sl_=aR72Yo/~XtQqsB}^c_a[3Y;RA;NW=9!B~`@N::%PISe3/sf' );
define( 'NONCE_KEY',        ' pz6T!S^F^PpEQ*XxBXmEH*3 n`|O~_4@yy}h;LSv(5x*=kS?@?!u]HRNFT%3SAf' );
define( 'AUTH_SALT',        '|}U+{@=5IelAyx2$S~:l*J#>?T#A$gtKkgz}Y6$KD.cY^Z|xOY5qB,uhedT%L3eI' );
define( 'SECURE_AUTH_SALT', 's^x8jocRm%A}tI yLOCamy(|!%Kq8+VT1T.c%<qy@=H~eJ;Z;DTkSv[s&toz~WPL' );
define( 'LOGGED_IN_SALT',   '4D7BvHTe-qsrhm[03UVZw:,BUw^n]D=s3X4:?t@J==h*bHgDsq36To3HB_iCn2j|' );
define( 'NONCE_SALT',       'ki.uR,/Vl(NP>|YiRpS&f.Z_T:tRD@oeB7mv^PK@>OQ(.&Po@w:@Ql9[w;-K_]z$' );

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
