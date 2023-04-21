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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '3odH}^;dv!tO*)%Exc}uW@,b.8w~;|g^V!3}Ktm+ezHdxz*,D+qjx}Xi`obMGoHH' );
define( 'SECURE_AUTH_KEY',  'z|?;EHUS)ZOW%dcMCE@9%}fJ3pz!81Lt+o63}-O|c70:Z)4V83Ah>6!WiGuam992' );
define( 'LOGGED_IN_KEY',    '[cn(CxmZ02vIS1S!81l`BwdQPr15B>he1IbIDlj5b,Em<D]2*,;/&}@aU*VqR *-' );
define( 'NONCE_KEY',        'tL$DcQYhy5=_YWJXTQ0:~waqIO.c{B1u~hK4m95+Pc*DrG!VL$Ke(D(o7FXyRonO' );
define( 'AUTH_SALT',        '9rj{k*>a2IGh.}=E_(1sZHtrUY!)Vte[P/ye0&s+A.5XF<piWz9]2QqN_ogHxuWc' );
define( 'SECURE_AUTH_SALT', '5/j}OfPlcar1$`1&Bb^5;{<Q+XaDd`r9U6C-XJaDxa!wj0j`IslWoS<EUY*3e:WJ' );
define( 'LOGGED_IN_SALT',   'SWV`YQMBdkvBHBh5YY?aOWc*,4pM?HW6&<ai>bm,lh#B%;<hto^ !jE:Rvmn[G%D' );
define( 'NONCE_SALT',       '@<=LD{&!{n.=Xb![vds:7iN1n]K7pDPz7K7phj9%!Nh(+W/R67qe5<57rVL?azrx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
@ini_set( 'upload_max_filesize' , '1280M' );
@ini_set( 'post_max_size', '1280M');
@ini_set( 'memory_limit', '2560M' );
@ini_set( 'max_execution_time', '3000' );
@ini_set( 'max_input_time', '3000' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
