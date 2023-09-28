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
define( 'DB_NAME', 'iradio' );

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
define( 'AUTH_KEY',         'mv;nMa)6i{XBUG5!%DsFcW<hI(p1l=!*}t<UfCnWXRsZ/r;@u`+]:aJZA]e3=+wv' );
define( 'SECURE_AUTH_KEY',  '~LY-LX&6y%pl5~:n+mc;R!2_,L6e*ZI~S])e|XQ)q{`A}_7l:LMR6hk/@5MN1x`Y' );
define( 'LOGGED_IN_KEY',    '/g`]YIEGI9Ae^,[|F=0ABkp@mJXTNY^!X1+R}/kSN6FD MOnh{TsWI9xGDQ,x4|9' );
define( 'NONCE_KEY',        'iWr;8*-cN_?53%s[<Q(F82@lh!!x*%Q&2$MTI1eCN2Ismg@1qH}_Wo9h^Tla dTZ' );
define( 'AUTH_SALT',        'KGL(4H{|R+xr@CC]PYh1,YoDx+YqlW7v&2d8S{gB,|=3mK/@v$yuE)YW)Z>SkcPx' );
define( 'SECURE_AUTH_SALT', ';n)[s(3jYY*~)-G3_{W.(pl)Ju<{|WV4&cm$p:gvE9;#dzhUMZd1U?#[WbTAT5bf' );
define( 'LOGGED_IN_SALT',   '$ZOkAEjBrd$Ky^}*{drkhx{)Ss$sS`>f4<c),!H3G5[v,)5>6R3)(N,3cC [ztsh' );
define( 'NONCE_SALT',       ')@+IydnosoN;I4j7%Q>QTYn _jR^yPMvm(x;K{jNL63ddg1kEvS)YAPe+8TmyKdM' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
