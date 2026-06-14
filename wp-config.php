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
define( 'DB_NAME', 'latin_wp' );

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
define( 'AUTH_KEY',         '|Z xPQ+k!&riubo+b-1195PK)?u(*S+x:x-k--3OpTvXxov , Gzm{!PGaU;jIE1' );
define( 'SECURE_AUTH_KEY',  'q=&*dw0V1Bc>H5[${bRW{i4F-H$7YFcdEUc20&k4gZ],>?;esXqF5SyKG@sJj/^`' );
define( 'LOGGED_IN_KEY',    '{,;|5c`&v1<)u+$)P~,T/l))s&P[9*X#FuWRCaWP2r*6)Qp$kf-IJP3U8@2Ye?dL' );
define( 'NONCE_KEY',        'yO:U/O[>zt?C( LlUO5b#_Sv8Iln3v]2[unSB^nV{7Y27aY4^7UinTR/LbX?$[/,' );
define( 'AUTH_SALT',        ',Sf@$5e _rQ.RXu&h/K^+jS&3RB9-y|`$Jy%E<mYG3^Y`[;g{i.*8?]N?FTknf)K' );
define( 'SECURE_AUTH_SALT', 'f,>I|px.Hy iwln3-@yhVRs.m:>-: %@AH 9lY}YKKM#P@|^S?(-%%G:M^@w{0@M' );
define( 'LOGGED_IN_SALT',   'R60(tNZ]^o0fe7JQw<uxcnfV:d!sScbA^DX>=7xF;8KXZ+]J(&6PV]-?-2.]RSif' );
define( 'NONCE_SALT',       'r@/K{=MtURH;PeI~-AxdDbB?b,H[V*YEBu/.j[=4YAP~a6l}S!N|O|f3r+G>hyde' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
