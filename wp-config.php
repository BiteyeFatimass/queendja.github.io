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
define( 'DB_NAME', 'queendjafashion221' );

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
define( 'AUTH_KEY',         'KC<6iYAZz%M=iJ=ZZptF1ceXA)Yw.Vh&LbBfss%RU?k;Q])F%0(X>Ess]E!~2;Eo' );
define( 'SECURE_AUTH_KEY',  ']1-E=zdaXe9|H^aFqa@.2S|0^a>{F]4Mcb6hPRIgY3|D5,m*C`QAN;N}XPj4}}d+' );
define( 'LOGGED_IN_KEY',    '(]#l.K{:NMLL#-]CXx=~ir3xBq?3shmFRT:zo@l@(.<|%;q_Cyd_)960E:pg,k(?' );
define( 'NONCE_KEY',        '(|0BUw;MEgLp;6p&L~Uk:c#Cv``8TaVn!CDmjP!:q*WI?0e.1LR2=hBgQ.HOKADY' );
define( 'AUTH_SALT',        '^kC*q&Z1F#P6n*Ctfnj8k&Ox?TzrV?[2&fyx`G+;`MK<|gWTbHo,W?eLQTs.0tfp' );
define( 'SECURE_AUTH_SALT', '6BYLE]Zl54CK23jr^F:fxU-kE4{yN(DLl0hTmRIV#6[ZqZ9/6l7zxhQ5>;4^kH[2' );
define( 'LOGGED_IN_SALT',   '8*pJ:?EkS8Rc~`t?yvU%:9}Q@`pY7m%T3k`+uA&,Z}(h@4pL1sR-NnLziZ)]LgW2' );
define( 'NONCE_SALT',       'F!(kMP[hYXwN.Dz6}U]LF!^sFn?Ftt@dPceFFaF2DXEYNh/ -Bt*79J TRh[iBi%' );

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
