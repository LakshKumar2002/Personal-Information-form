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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'CQBw}!-^ava-a57pBkl8GYXk4G;+3l7(`{=SoA2%pB4k7x{~?0Jql Fr!(*m*gP@' );
define( 'SECURE_AUTH_KEY',  'R>i ?E.$>7I`l0FC^B^1CL_C*R53UL:)qh+7!`H b:NH}NXoP;m,{0V>D Q@v!$8' );
define( 'LOGGED_IN_KEY',    'l40:GFJb,9SG:7i+-q7Eb-Z0l/FpjGxH2f?;;rKgiqH4wRRU9?`2gyiM(`x{D[cy' );
define( 'NONCE_KEY',        'UE`jb<o 3A)fXT_5Gazh*su:%y2Rqk9<v$F%khF75c[?Q2)*}udTFEc_q%VEf?FB' );
define( 'AUTH_SALT',        'dhu[Lz|@;BLdg4iU#f;Ip6-pVd)f1@/2ia?]+uC0Oazx^QT{|[HTN^swqu)/$rnq' );
define( 'SECURE_AUTH_SALT', '{7P!2~CSd2?-oGlV-{*vdTUn=AUS^NZ:4)5T&i{8g;!>ZhBT>htHrj@tduvIVsz5' );
define( 'LOGGED_IN_SALT',   'ivcqO|y=p&H21JHR(iwI)QCM[GK,tk@ADW7?%s292[x3-N(-2G}(#j)d%+(G(Ev#' );
define( 'NONCE_SALT',       '~kTWi;7=0*CA>s1p|7i/wJaO<gv/`_^9lnAi72,wd_rh[y<jj7J7@ZO6edzoSQu!' );

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
