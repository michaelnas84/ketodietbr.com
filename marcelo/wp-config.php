<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u513972761_WQ9Pn' );

/** MySQL database username */
define( 'DB_USER', 'u513972761_pdPqA' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H4DV6qNjZU' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Y>qE8+;LKvkix6S(]q*VGchQtsz6^SOg9[jbvV|h#&d*]6#V~+mH%*KD#Prm8zGZ' );
define( 'SECURE_AUTH_KEY',   '|p~QWch*z%X%DRV`(-m5X-]~k^&~cYf&Ysf7DiC|drzV%@E6x%?a)VDJNw.~^kav' );
define( 'LOGGED_IN_KEY',     '1xUg|FjNAUz~kFt(>w5#V>Tz9Ul,%<A{O%DvJjbM+t(/J[)xomx)R ,4# =qCh@H' );
define( 'NONCE_KEY',         '|,`Fsh=DqETa-[C>XZ}>3a36/LC2N~wsI?!jB=0T@%!n^YF7rB?;{wgF*fAXGFU%' );
define( 'AUTH_SALT',         'FFb|d-kodkbb/L|3$+VI2C(H`J:Y7O?#bBgqe:,K?;%kQmpMu?m$G[?JfD7?GH;,' );
define( 'SECURE_AUTH_SALT',  '.z#Yw^9hyp,gy}pP{$<K79t?#nf5Gp#h+K;OaI%0-wYG RaRCU)7;{];,WZ} $GV' );
define( 'LOGGED_IN_SALT',    ']RQ#RS^Y}OdHH-O&X[N,>%:?3zXK8>ilwTk(XjHk[U350E+nV5cc@l5?/~Nr}|@?' );
define( 'NONCE_SALT',        '/@tK_lrk56(?o-(*RYZ%q|U+oU1WN}y&zIec.?#Xb&I8#Dz;:NNs$<ht>TT0A@.;' );
define( 'WP_CACHE_KEY_SALT', ',x[QGQAGF<L287Q^BNao(6P4zJg-qw<)ibE-hnum$ZZ*!9mNrYU4J6a#T0#Us?s/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
