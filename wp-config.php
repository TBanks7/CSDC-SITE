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
define( 'AUTH_KEY',         'QqGDu0z0oh=P3S#|Oi/:Drk!V@c-~I&1,tQj+[N(#0G7y.s,rN3Y3N!~hjw^w*jX' );
define( 'SECURE_AUTH_KEY',  '$RZQy@qL`#:$(Y~d&hrpF/J82dj}-Z~9dPBZ~Hgv9083?8(/t<bZ~3rs4R%ZATZl' );
define( 'LOGGED_IN_KEY',    '$.OmGOjhmfNWCZA?)3s;5SCefvPoVLAghm:*L<4O&_@!?bsVWti=fy{7,)my;%nd' );
define( 'NONCE_KEY',        '[u&[K *oRf.s>BVH(F*,V?Rq@$d*Rt?W=joz&1Ov2`%GnsuoA&g]dkU}!BCuld};' );
define( 'AUTH_SALT',        'HAFX+6Q6rD(-,>(PG#dEs$}P:4/5Tg(5.`g2%{;wLHEI<W{,c&kOl$,8N6/K=~>2' );
define( 'SECURE_AUTH_SALT', '-c5{_U]=YeqC=D_I=D1Y`EF-N#fp9KoO`71>Z}iXP~+Vt}r]qLNr8Gq(%=SfGP-#' );
define( 'LOGGED_IN_SALT',   '.] N/czu}E8ffSnWKp_%C;6T$Iv7,d8^DS_=QAXg$!BhqM$m+T]$|~nvk6vRK>!u' );
define( 'NONCE_SALT',       'yX[NifN6dLTh~A@R;RufmQT*ll8^LR|&)[`!8j~ gy0YBuPU;6!_gwp0]m6]g)Xl' );

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
