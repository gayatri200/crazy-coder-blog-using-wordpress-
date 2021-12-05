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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'wvr#~fBa,=k[S``~P^O)rAX/Q&_V6NNE^_4VmHD,cJ}6(jC7#{,Fl%S|GZ1Z0$Oo' );
define( 'SECURE_AUTH_KEY',  'w/X/_QzVzYJEm$el IaaN$!Eh-AEt?=?Jl$MPXcM`vTy1-CFYVEB=SyluB-#6Hw9' );
define( 'LOGGED_IN_KEY',    'VhD2`Hg.2JBmgbQB-UO<#lStDNf+?i 89gii&P[KPjAfN=ws65`&J>`hUzs2M9L`' );
define( 'NONCE_KEY',        'Bbzm+u=sqa{!IZm<eWsVR{gxeG|J329hA<Im,}vFI&ns3M>I&OT}VIy=K#fE#roK' );
define( 'AUTH_SALT',        'D#sUAIQ.]r-yn|Rpz) v@z(yH2yx(X}6S?[r|2)hOm.7M^`28)S8tp,-Z=CfA.rB' );
define( 'SECURE_AUTH_SALT', '~WYr+]TAfP;}/bw^/=5sO)Uk&2D3y@@GwyM]^Jj>}A/X_QI=q. `>Ll/5,XL]3FS' );
define( 'LOGGED_IN_SALT',   'q`PZZoMs-dQ6mVA;$P5t3qCY(u-7lg=7y,$2V8Rs<30st/_MxX,<ujZ~b;|mX*r+' );
define( 'NONCE_SALT',       'uSJi#K)(m}%&0Kh].h}sT|*4f5l25w?$@_Yi|wnQqdx`;6X~TCRB).hAKHPWLx2W' );

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
