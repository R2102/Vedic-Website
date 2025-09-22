<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u202100412_nzmAO' );

/** Database username */
define( 'DB_USER', 'u202100412_yo5cP' );

/** Database password */
define( 'DB_PASSWORD', 'UcALNsuRDD' );

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
define( 'AUTH_KEY',          't;ivdpdA<M&t)gXCv)rf?0^g?6=2zNBsz)rRvIHyF#KqF*d~BywcB7rpmdK,ss]M' );
define( 'SECURE_AUTH_KEY',   '@K53 G#2At27[IO,%t]fA(=D{@tRD= KWz)$IKC.&b-Lty#0_@Z5}(Ny97*FRs*$' );
define( 'LOGGED_IN_KEY',     'ut8nj8ZwTkfP;O8?Tyb%WHLpO#^Hy*,EpP-bs9n2Q7<DI+d<uzeG@q_%e?x><Ed`' );
define( 'NONCE_KEY',         'wtt)Sb///P=.ZBzBPE m_P`VREyb3.N{*y`$2G0S-j/^oVQh8.d[Ic8=v2{@O?r4' );
define( 'AUTH_SALT',         '4s4YcCalH2wEaYH}|)h+YHf|bW<<8b?pN4OLH{tsh<?S1aP=Db,pouN2M7fl(HvF' );
define( 'SECURE_AUTH_SALT',  'OO`SXPAT`FW9+,:}i~A$.3<+q{%xo46F2vrkMW>3d-JG958z4f`*ryK?`Y)JaNa-' );
define( 'LOGGED_IN_SALT',    '>RrFuLrx@V5@B4)@@zJLVx!sl6 #,?H.z*F8bD*cU$jBhys?t&2p0sEUzac`Qk++' );
define( 'NONCE_SALT',        '@@nDxVN,QX+}}BBh&}&|Yw%Hf]O9Dob&8SNO@*:.}mOLIc-{HUazWPdm%@vt?CF!' );
define( 'WP_CACHE_KEY_SALT', '{)JMYayt,u<u/uX4KHtvsGvGeHp%x-:IO_+m@ZuEVzHghmzFQad0G{EXzSx|q?4:' );


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
define( 'COOKIEHASH', '001b3a30b12ed050765d4b7b7aedd52f' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
