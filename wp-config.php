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
define( 'DB_NAME', 'test_for_scale_final' );

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
define( 'AUTH_KEY',         'iKoyo0,1U0@z35/]{le[g,FCb`^KEfwzizaoOpPIkK_nKZ^$|mbmT8sDF;3kz-rF' );
define( 'SECURE_AUTH_KEY',  '3~P4& *@uYsK~2Nr3&~G qIkF<^ 3VQ$Bm=XP8YmMXw;]4vRG3T-6Z+J7G/?o0LI' );
define( 'LOGGED_IN_KEY',    '%h&4-A.j?lYcAj:6?L?j}OtPKXoEu,J*y!}Y`3x>#4A]UAP!1hHe;rhF|zU)7>ed' );
define( 'NONCE_KEY',        '~J3HE@^-8N Xr1{e+oQ^5EFZj2O{fTufg<I;?IIw@=Z~np[At6oS+G:/pIo>u5pY' );
define( 'AUTH_SALT',        '*JXZR8`b[ ]mfyo|RH]fEjExvO!gO?( ;A^^<[*C/gy0^1T3p<Wrtq/0IJ2DL^fC' );
define( 'SECURE_AUTH_SALT', 'hEJ+LWoP([;I/v.Y6]dg>pdY_-CE^^LT0Ofz:2h{.OQJq8q3~Kh*ExdfXo5SEz8~' );
define( 'LOGGED_IN_SALT',   '~V8(+PB1jH>[VJ+%t-%FkS&(s{{-H!csGE?fEF^K!&A&W1Qzep6@d0ze!$h55b,S' );
define( 'NONCE_SALT',       ',WSc-gGDehMp96J3w@A%dC@fwB*+^{c+3EvU@g{G(V,w;wkb:Cg<GGb{E%in^nq|' );

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
