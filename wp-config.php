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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'fVl8K8SSJ-w:/4|. (d+>(S7 ?MQ)vId[o9UcN|EXGuY-?,2{g;k)7HtZ2~Qy$. ' );
define( 'SECURE_AUTH_KEY',   'U=Jz{<H/QxQHY3RLN@.XhHSbFPeaI-uY}Tr=(mJYOpTwCN(I$WNJ?9<+q;,b00is' );
define( 'LOGGED_IN_KEY',     'wTpGMD$O_{Av4E(;)~ nEbqSI,<2DPc?*kr9:1K;>&4v:w?p::aKIX]kIK_9qUf;' );
define( 'NONCE_KEY',         'an]R<vLl u;6JY?~QIZKoK{ |U!8R|-Pf9oSvn.p8kA?+*4Zcq5|w1lV/GUafBK%' );
define( 'AUTH_SALT',         'sLtDv73D6Jw.I$glIpn9?,h^l]tdj:%CevZC?kTxgHH1?)[p|5G#|82p|T*1}}An' );
define( 'SECURE_AUTH_SALT',  '0IG+ctv)8a LlBL%K5%e9mp4qNazPcs,dD];K88x2!~B{yDfnc%5w^oHh#@g}X5[' );
define( 'LOGGED_IN_SALT',    '}$.-w%A6S&.ef7AU{DLgW%^K`Ax<n[lu+?.ODCe^jxk<d_R>C}0#ebR~cZeH6yv;' );
define( 'NONCE_SALT',        'B[LD|_f%AW`5qHc+{nZd/[J]drhsYcWW~?:&*FB(g!yuA^ [v L^S]7KFEv%lZJn' );
define( 'WP_CACHE_KEY_SALT', '%oT}h$l++6 &]B:N/jw}^[+(^#s8V)5q8 MNJk6|exIw`Q4nHo*w_zG!=LxR]{G4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
