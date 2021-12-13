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
define( 'DB_NAME', 'local_baby' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'CNAGTJ:h`k}z=zYP<rjZ.#e8QLQ.J4GwYeeFp2;X_V~QR<@6;%-wFtR4fr#XD~:[' );
define( 'SECURE_AUTH_KEY',  '/H:R-U]o0C!OBF7aF^qZ,>4g./(IQ0?O7k2)##VD{/i@Sy)+7M)H[xlQdt5e:]n(' );
define( 'LOGGED_IN_KEY',    ':$7gE$o6n 220jV6tfQZOy(>:A@,N<_?!H]DXv29`5%32v}e=+ISSYIfDTZmO^<$' );
define( 'NONCE_KEY',        'n0*4L&BrBHWG;{F`rvZ|nROzdYm}qwhs{7~g6Ia|v$ Zo2TT-V_R!bFdR9)~W82f' );
define( 'AUTH_SALT',        'H+p.(PkhkI,@nM/WDxc!L_hFYid28NXER%4&} (/:f3bC}xol*?dJ>o1I!KyM&~,' );
define( 'SECURE_AUTH_SALT', '2adk;-2f `2-WV3d~PU2%5]I.o1`/jUVsT0BWtXn#s9~fBK4q[jr6Ve{)WX%qN/N' );
define( 'LOGGED_IN_SALT',   'BrKE}=&+QycFQ6|G1,|F67}oVh=MJIe@H MlE#Fi8L.46e[=9UnI#?}dG@O*[m0:' );
define( 'NONCE_SALT',       'Bf34%Ej;7IhFYNZ8hw/D9s8D@!N6d1<dg|4?n)BWf^IvYn~+kTu9rY+uD%&Z;^c#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'baby_';

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
