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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&qY==_)]f}O>HW+:0y00n(UcbyQ[.{clWI4!rjCEoz@ mf}AyA+^u$N<l`54qoBa' );
define( 'SECURE_AUTH_KEY',  '5AZAp15mf{ta&RHtiO~u3sjtSVWeZQ/b=u=&XXwE&L7|4VB:M>=lp-(_NtDRazg]' );
define( 'LOGGED_IN_KEY',    ')caEVNh5)81zw,n-GmW(J4&yl+AiWNjx.B&uho$%4D]YgKYzBZi41,pgf3Q`ODB+' );
define( 'NONCE_KEY',        'RI15Th+rkUTa~emu#@,^8[K.U:F+jK<zC3PGUcdm$@X~[pMq^o3+6fXzu`mXQGX`' );
define( 'AUTH_SALT',        'VM#IuFQSe$oYwu9QM4FUHX3z4c3fZU<7e=& yIJ8e|?ZJe)`8f-3)m<e.K$Ixy(7' );
define( 'SECURE_AUTH_SALT', 'Jugraxi.=d|WH5L|[RaPZ[PQKF%`Z!|F c-meh<{ji07Ggcf<#KSP+Ha9qFOvrTq' );
define( 'LOGGED_IN_SALT',   'C.>Yy9Hj/x@oIRO6?0Je{Z%NWsPV8IQgvu?><-DqTYX3*=*BUr=ahBg,D80B<&87' );
define( 'NONCE_SALT',       '&>nov>BO|/Z(n_xyJmNYQ&WbmAtRq>d!U5x$#)Gq@{Is9i$-bf-U?>/OJQh=VPQ8' );

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
