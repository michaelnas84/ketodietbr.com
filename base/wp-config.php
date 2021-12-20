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
define( 'DB_NAME', 'u513972761_R9fcc' );

/** MySQL database username */
define( 'DB_USER', 'u513972761_zfQFM' );

/** MySQL database password */
define( 'DB_PASSWORD', 'V2RxpvIYYQ' );

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
define( 'AUTH_KEY',          'Tjh$7>z|<*{cHlGjd:>9Qftkkk0eeIQ2}GW^a~ p9ps^NB?x0EF)4E*K`|u3wK|,' );
define( 'SECURE_AUTH_KEY',   'B|r0R-T:?i[i-/Vo._D-Id4R1HQbiU/,.xrtGQ#K]C>LN-xu@iRplHL1E*8rZvCu' );
define( 'LOGGED_IN_KEY',     'Skpv^JW9qO@*qoMN!Cv_#e=]F^7$Pr0W.!LId`nf9>/%y}dPl-;{>/]}0~1g wMA' );
define( 'NONCE_KEY',         'm@q:Oy9d<0K.!mgvAN-mp]/b/tc^@ou5E={]jf!b2)KE!Kyn4#?fBdbykS]R6Z(}' );
define( 'AUTH_SALT',         ';/DH1WE^8aV;uzLx6|u-7DRr6ho)(5+m>F+NjG+p+05.Sch#@}hGv5yZpw2g2UZv' );
define( 'SECURE_AUTH_SALT',  'kIGy <5}5$[#RZkmu:l_Bdd1qyUw3c>) K7f~Efmsx%q[TS<NT0bhadKoo>OhIZ*' );
define( 'LOGGED_IN_SALT',    '>(XM]ULxO!mLNk;#>3D)PxgaapXGGWBL#(!u)@ehiwZtK^zn^azD_JU_S)!N3_us' );
define( 'NONCE_SALT',        '!Yp$}`X{LwlwkJbBzJ$c.Xf1]: ~1tRF`vP|TvsoB&vmM!Z(&HEYdhC^72.{W*(*' );
define( 'WP_CACHE_KEY_SALT', 'MNB)~{8UX]A7epvy=ZHrFLT@Z.yh:K5Ua6VLmwaXk<I<<2Ypt3~E#OtZm,9lL~8]' );

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
