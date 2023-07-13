<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'websiteku' );

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
define( 'AUTH_KEY',         ' vHP1T/lRS,&l1vbbeRH*%pai(Dw{c*AMj?DqSz4xFR;t5/E/aG$8ril=&YGc?=.' );
define( 'SECURE_AUTH_KEY',  '3/p?LR`XX]E+VpnB:TjH=U>CS:;MvTR;@kWplLMU9xqz}PSTn~T~)-*#~*AOI-kC' );
define( 'LOGGED_IN_KEY',    'JEH{PgF):_gtcS/#MUjHV=Y^`X1j[gBQ`5l!HiGP 54OZMT8qR}*{SKfhJd+n4]z' );
define( 'NONCE_KEY',        'x0Z8Z)rMZ.Y:.CgpR[+j[XkTNAE$2ooaLKFaCPb[=wWH?o6D*rVeYdn8BbeG*OV@' );
define( 'AUTH_SALT',        '+z1Z][O.or yi$@{(1U2RhuZLEEU#[KC_8qh3IyKj2U<v^^f-S{]9963`j.<P@tO' );
define( 'SECURE_AUTH_SALT', '5NguaZs<+_(H1jrb|s5lPYlFlpwy@|%IWJg8dXPE{r}5#D.}0t[0M(PaJR.^!rqm' );
define( 'LOGGED_IN_SALT',   '7}n^p>%whC_QXEfqD97z1*4I}KoH~1<Zie,2]6Muws,5$)3wX @-P1LwZ8mN?bh0' );
define( 'NONCE_SALT',       '$?Nc]adee0XEO;`ZtjUqy4n*$.o#@u:dyi|Y@>/:GIT5I%; G}LYTTJ$iY!toqVe' );

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
