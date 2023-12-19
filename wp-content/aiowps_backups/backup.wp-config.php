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
define( 'DB_NAME', 'artsnews_art_news_db_2022' );

/** Database username */
define( 'DB_USER', 'artsnews_art_news_user_2022' );

/** Database password */
define( 'DB_PASSWORD', 'am_6Cher$J_.$2cf{I' );

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
define( 'AUTH_KEY',         '6R22MS`W7m*x8tr1;ajzOo/uSee|ktd}s:A.AE0L:naO}ZN@@YWS<L].ZCTNTEMZ' );
define( 'SECURE_AUTH_KEY',  '4E0b:>RDm82OfF~M{XvGUw1VP5:rq^Oo5W]V=# 17U?1iz$KSfD2/DK<s#YtwE~4' );
define( 'LOGGED_IN_KEY',    'gJ5Y+/[tS>mTYKH<=Q1Np/Ao*`3V{r,_#}_ja_SKPX}wb{;mB:L?d&r<6VtOL%nK' );
define( 'NONCE_KEY',        'X9n;Y*5QoTe FaMt-zC3Xh0Knz:alOk,%>)ni&68N`5gW`v4x`V#5p|cT_0y&G=i' );
define( 'AUTH_SALT',        '2nwM7arjY+Xf/MQ1p#5T8Kr~q^1<5M4*i4EvBd^kWvn+*8-*K2le$t>!CKIBabX/' );
define( 'SECURE_AUTH_SALT', 'qLOw1,}P|xZrN(~=O}u*Igm1)PecWPX_n-v{5ztnn$H)Mk5JH;$v:(/n)D:RB+u}' );
define( 'LOGGED_IN_SALT',   's@<c(jzs9*oa58Ldn>7fo#:P~bsaVXktI=ghkk(/tWfIIlG5=5,_/T!~nQki@xb ' );
define( 'NONCE_SALT',       ';uKu!&FHgG57yrm}]*X;sqP`V8m-XquJEiif|F0PTI|^S9NGwN(=qbf}Gs9T|2Cf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'crco_';

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
