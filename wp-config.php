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
define( 'DB_NAME', 'newtest-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zH55d;;5sC?x}yD0Te-=aE9VM*4NQa|rlqS&q0N@4ww(Ii1QZx=sJ>A]!^|SbveA' );
define( 'SECURE_AUTH_KEY',  '1J;(2ZrITJsQ>Ky!S0h4H=cqpP/FW5B%zD`M$g&2u`gT?>Wd+NqX(?DFblIkonR/' );
define( 'LOGGED_IN_KEY',    'sStq7DbH-aHx{w580dxz[!^$,AzE4Z+G?Wi&6A.<H9LVb`Fxe}SrX$})GKrB3Yca' );
define( 'NONCE_KEY',        '*krj^nBRpz$fye!cvp*@vyOew#B2mnA:kj&5p{5@,~_{B-dY[+ U/a>f$J2>~jt*' );
define( 'AUTH_SALT',        'J44|_<8c;%zk WY{F%qe#L= uxn4jf${NtGyjHHE?_;ltW.rg:F,T4F}FC8~},Dn' );
define( 'SECURE_AUTH_SALT', 'P*/vUDxNGEYNL/o<YzRk7=Jq`heC9o(`Y?,&2 BO!g~_&@ly0H&37v|G%.!=^Ly.' );
define( 'LOGGED_IN_SALT',   '/+vY3-j-$bD!&!?BhEX5kDI:/ff#V+>at4o86Nm)2>(3P0a>gIED@s.zIbxiTGf]' );
define( 'NONCE_SALT',       '%:!u,&m#UqpL$h;=^i{HCYz_{u(T<m8]:o/EH`&AY/+!2&WYDs+E%ne$ 7m]SF/S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
