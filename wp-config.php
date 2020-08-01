<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paulhewitt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'aRgt{8!67Tl8_OM.v6*A~O{tbeXTS73kGu:E:GMl6q@zEZE0;Do|r{lEa`ICT:;3' );
define( 'SECURE_AUTH_KEY',  'n-i|+`KZ*b!J@ZGT_9I~,on=b^U]N{`}Enc@^#gN7#B[Q]]q@Lfq)XwPChN24z^9' );
define( 'LOGGED_IN_KEY',    '@KB(ZpH4;{[J(A&l[)g{R%^d3C7x1L!KwZSA=62B];lkmk1;!F0FE~6*0(7A4BT0' );
define( 'NONCE_KEY',        'chhst:YC;G;Ws<pFCxcF0U:r0v@&?_(-X6`~B9Q/WAbZ-0m+e.CxBg[F]*(}$[?q' );
define( 'AUTH_SALT',        'g;{ect?Ob(M:oplt(42w4nbJoj^^dP{<soS&iC:1~g3|sm*kTw~jnP[EJ9iYkC 7' );
define( 'SECURE_AUTH_SALT', 'X|z=j>:Z9H8,$6Cv]lA,K7~k:l+=J8/ 9:JHv;P,mB c2VVcu;s<1;?3QXs_-](N' );
define( 'LOGGED_IN_SALT',   '[T05dRI+jKWAj:+rtb,!+eOt0O#=10N)H.Y]>?,#n=a~>crkCGPP9^#{L^I]x1Ft' );
define( 'NONCE_SALT',       'q<,kf&ngQ9qw$$%4V^g1SE)u>eC)$99H6mec8I,N_xLHg.Rz`u^DuR%-u,Xb4{7:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
