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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NcY&Ua!]gl1lMtZogxIje&mhM{71>&zpigvxcfW>Q@f0cq%HoP*%PD`e-9}O@x,Q');
define('SECURE_AUTH_KEY',  '%B3eU,o&J_J|k9?,BEz}Bvo-y[`XDvvXUlkTn)+TM0mrU4T1aY_h<at!<isi{x5I');
define('LOGGED_IN_KEY',    'K,jtdy]U/GmmWk*UEc-Y6oCjCag|G;(R<J.zA(5qL<c34U~2{pTl)5#2nn9ww%Ir');
define('NONCE_KEY',        'Uk^`8CIV9$FB1Y9#mCJFpIb*XJ/2%Xp[K^Xw<gxQ[zp?5a<ah`Oq.`rZlj:f10H,');
define('AUTH_SALT',        '~}k gzb5>a:I~OGUC4E|c7!RwaOqpy[0G8Ur:pcxu6l~sq?. LgIcHX0UMC+`{*8');
define('SECURE_AUTH_SALT', '_9pAq`)6tw8oBU:EMg}*=nXMwh3(@H{VUIN! hdOXT-G3a[zIqE).kE|xV1jC8TX');
define('LOGGED_IN_SALT',   '#od~^_%5D:(KVuPQ;lzUv%>:FBqtV-#E2v?bhbJYnusE3Bvy_~=W61y?g$=#/j%t');
define('NONCE_SALT',       'ML>t4) X1}^64(j2KC)-*{@l%[:56T<^pyz(VDuxpgrzX)U,4u2FzDrSmpRVe(j2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
