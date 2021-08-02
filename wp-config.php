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
define( 'DB_NAME', 'college_kolomna' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'aGfD3*NDs}b[]DbzT6p?Z/aHC:KV_4&U2IUgb<Q5HurO@ =V-2/Y1<:7S4K9hy]}' );
define( 'SECURE_AUTH_KEY',  '%IsZ+s-qW@$r9p&qT@In,t=AZjn!~J+#t#aD`K7jgJBtG}i(a~&yYmc;2h>3hIiU' );
define( 'LOGGED_IN_KEY',    'D~H,*LGR|3 i7e]Yh6N#<*>A:Mz34c,fQs%{vAG/,3i@xsk)X;!+tW+fC9hCv.5:' );
define( 'NONCE_KEY',        '%_<G6^@]8x;n?|W1QZ`uR$w|!sJh34k:-g%1ats`>v9^ZUg7;:x>v=ffgkd:f#7:' );
define( 'AUTH_SALT',        'z^<c-R6=E]n(a8>W/Oa~<?M];Oqk8WEG;[(7I8Eq,uV0Hi*<pztn<2O*_&/@8u)T' );
define( 'SECURE_AUTH_SALT', '{-D_we<FleC;4dq/3dG~)*wZ;3(,Xw`wc]l/(B7jnnD1_GnkqIgs6?uo*6[8ZKAs' );
define( 'LOGGED_IN_SALT',   '<x(Z$,[luQp{1|3{G2kwf;O(1<^6`I^Rq@,!VIlATvL*N.m%qOv,SQ@O^j!Di^}&' );
define( 'NONCE_SALT',       '7%x.q!iD%Qz7SZLwS*@vDbk>-:NdK5`)1OG~8VBu<(v98`5ut%[5Hg9u9aA2hbrw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ck_';

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
