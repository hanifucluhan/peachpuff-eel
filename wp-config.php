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
define( 'DB_NAME', 'u874293345_dDg6R' );

/** Database username */
define( 'DB_USER', 'u874293345_sNRFb' );

/** Database password */
define( 'DB_PASSWORD', 'YLbWkooUy6' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '/S@;@w<9VECMv~&Z!)d&~|Pd/10M)5i&bO{N[`H][0QwRF&R)bjVBj+qYW}O<#~g' );
define( 'SECURE_AUTH_KEY',   '`L}zBq+PfMi9J`3@k5nYwJg(^4-B|Y3|xd_><&m-T!@0.KvNW(<OjKX]|rv}f[NY' );
define( 'LOGGED_IN_KEY',     '_GsC_h8Iu}o.4JYoYD4(6n?xRWm3i4#)T,CJn3H{xFo0gco:RLU,p}<,!fVsS9jt' );
define( 'NONCE_KEY',         '6k+Y*tC|m4BT&U_Z+KPPe.<0)C6|L+iLT6d)O#7Dd?lvgUpCo7gwL@aJw91M1#%>' );
define( 'AUTH_SALT',         '?O*ekB3_j]^_,N]anVLwA3{~xqYzH>l#s!Q;$ 5x!~9i(9G]l0hbxIv*;Eyy`~7]' );
define( 'SECURE_AUTH_SALT',  'I]S]8m^Wc74h]VMBI!+ ._6x/g m.XzH]sYAOKo03)y;&Q4be3)G}l?}&|$]4phC' );
define( 'LOGGED_IN_SALT',    '8f:eK!2E]aCv0vnvauY0<hFi3yL-pEuU4S/HTt9kDKaDDT_+`|7z|`ekFQ>riBr^' );
define( 'NONCE_SALT',        'x[eDC/}vTG#=?%PWom>u& v>_r_r8u`bbJ=M{$9Mjsxkt0<j^Z+5AjzD@CMTnc7t' );
define( 'WP_CACHE_KEY_SALT', 'r^IX3jT<A]xKP8+m_0JyQoShVArg#E:xmq:1sib0.NB]N&,@5bc#uQvZnlRP.|?v' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd0cd80ae5157877d28b611beb6d43ffd' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
