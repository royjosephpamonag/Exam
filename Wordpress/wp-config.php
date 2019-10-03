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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mytheme' );

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
define( 'AUTH_KEY',         'L|n$i/`XxJ;TJD#wAkoSW822@jM4U et(K#fT}}` GWqTPijf;B_gOxe4W}6;nwE' );
define( 'SECURE_AUTH_KEY',  ', 1F}hvIYHgXDbys8+(]@Y[$b{}?`pMmIcLbF:n[>MSLQ6ASu|ZduKtkMXOJd#G>' );
define( 'LOGGED_IN_KEY',    'WcI?d_u -4Ymr*kSqp iv4:T?8Ngd{tJQYC3Fs,D j3h2Gj2&Gx#.1Weu<MoGo5<' );
define( 'NONCE_KEY',        ';|a_xC2mQEOwJeJQM]/8J*6Oa TB]Eb:N!?vco~yK;+fqpcw5;<I_}IWYL1#3V~[' );
define( 'AUTH_SALT',        '7 dG*{VM$hG|i^QD^jOF]TL38}9z2W:qD+p=nKRPgpLDw!J4<svQF6ec%|Oko%rH' );
define( 'SECURE_AUTH_SALT', 'u}{{HnSltA-#NlTosH(/OKWF,u:=GU/k=rAF>sYK)K_9%BBE[Z,U!bsiVX#>.~;>' );
define( 'LOGGED_IN_SALT',   'JIbOLtWu<#ACj>dn#j|?!IeG1$EgeInUl9Gtpe+}hbUdS/GwD28:X&`Ef_W{ ul$' );
define( 'NONCE_SALT',       'L#=aBFJ1[-[z}7?Q5Kjhhv^2$PDBkR5$Y~tZszs.]aco?@JEM9w#2v:q?r)LX Th' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
