<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user42' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'slescure.42.fr:9000' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
 define('AUTH_KEY',         'D=pQ<u ]dA$J@0a24V6Tp~C^3]8dqN*a8J_j)z0lS*PR#Q+K@Cb:12QT`W63N~-?');
define('SECURE_AUTH_KEY',  '5d?Wz]S#8(wj@RdfvkG|_F5DpBS9zVt[Y2h*;%L@FYv9#glYvt-!l$RA0*3+Kr[g');
define('LOGGED_IN_KEY',    '4 {147!+>2=;B6;<i0+-v!AH<A3 H|DsQe-hPm)g+<))|!t]HKoWNNkzfOxJ<II;');
define('NONCE_KEY',        'YJANjn{2kZ!GeeIwb:51~#N5YI`w=4-]+~vh,?VtHwO/)n(>Hv~Av+?BR@2nT^cs');
define('AUTH_SALT',        'r&,MF4XD6J]wn=JN.@L^u+.8KhGVMK.d+B;9 z#@)>GEdXcU_#Ov/Q<P*Dz`6u:K');
define('SECURE_AUTH_SALT', 'RJFWv/RE<%h8Qu^fNd Y3hPq_wN-uNp&Pqc#E N|FO:|DUS:r;ZcZ]`+~KnQ+.x-');
define('LOGGED_IN_SALT',   '*(rr,Ti>$m{WE47GZs.%]5)Qx-b36)|8Vi.A]Tm2K|9{Bg _i+|xf_^CVSQlGYCh');
define('NONCE_SALT',       '^9K+1M^8U(zs+UcN)l3YZw7n7j}+mg(I?XB/:@ 7 u6`&RU-*$Q@S$hBX:GL6-oh');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
