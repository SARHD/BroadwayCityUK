<?php





//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'PLgqTzBvTKMawD3usxNhtfWy3MkrV5YQkiqawO8Y8pVQ4ajpvo09KBUeSBCygLx4');
//END Really Simple Security key
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
define( 'DB_NAME', 'local' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
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
define( 'AUTH_KEY',          'E*JkK@Xzp$vk%LTCcIW1EvCz_bXoB:1Uv(nM:],3U0tqww3eOw+X;?ZT#!H.2kp3' );
define( 'SECURE_AUTH_KEY',   'K1YH.8C<PJSKa^rmc| _?<]/zdO>0=r%oUYeR8qFF~QuL]XTGHjSH()FXL75V%N0' );
define( 'LOGGED_IN_KEY',     ' i^u+X{M:^1|*=nJIt;UB.ej}oZ,T^3uUY`IV,ZbRN1xs$@jyY@p#aO+hNzc%i^L' );
define( 'NONCE_KEY',         'VK242d{#c%I?9|x,l4}o[fY:%06xk4nS:n/n R1S%Vj:D0Ayf%b~c%Ir>KB_6x j' );
define( 'AUTH_SALT',         '%@#:AWJkYPsS#0aC)l+qGK7-,#?70g}#F$mA40!IAvo-=mKAtWSp ;JYWY HR|qb' );
define( 'SECURE_AUTH_SALT',  'I#FyqCJxVD#*Fx4;(^sPTc$2;2xj}l5rk+2eFh#3x)GwnZlr&+xE#S@D[T$lH5^*' );
define( 'LOGGED_IN_SALT',    'O$1fl,g7 %|qh]bB(t_7Am WhN4u/&S+>]31G6>A SE$=24qM9*KLGp!?a9cB2AH' );
define( 'NONCE_SALT',        'cF5jKY*(}dN{9JC<<7XTmzcQ?$7L7nJNsk7Ua =lG*iw$h!||jhO?BH%PknCqmh2' );
define( 'WP_CACHE_KEY_SALT', 'aMsP|7~|~v;{Z-snX>ihK3:t$T.oM(Jv./Y4>m>+>d2&cTuz[g44^&:o{1V3-^j[' );
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
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


