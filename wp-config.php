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
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'q1w2e3r4t5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3r}Y|(OZkF B Kl9/rTUl-84z3i!cl8 ){T6[7[W9x|xhwwsd-RL9Ti8;07Xqztw');
define('SECURE_AUTH_KEY',  '#8}z{XUS*jj5R1 >{]7H1@W@vOoTI]LM^H=6]V.L[}TGPAo5#PG+/pXe:[B9<w>V');
define('LOGGED_IN_KEY',    'l!(Rb0><n6NiWoe|Fx7n03)=+R=?3b!mlEHe>O).vTY7y`TM8Y}L7$sK8JFQ0l~G');
define('NONCE_KEY',        '@:- 5Kf1yC+^<K$fyt;@F!)(Ewvi;v0C=[4MxmY(!IlnU}t$^652D{<YI`Wm)soj');
define('AUTH_SALT',        'ep`Ge.+r_&Q`<Yx3l0nCW6!9s.q]g0V.7+v}!HMX%Q0O:=rDle6$Xbrf8{p5+2yQ');
define('SECURE_AUTH_SALT', 'R.MZy1R+ ]=OM9.h8W=F`cxTN $,l5sB)<1R+lomXgpz/n|+$&?%Laa>#<bdgp{k');
define('LOGGED_IN_SALT',   ',6(n<KQ;^Z_dtjoD$jd@Nj.;RrO]TJXbzm:JewnhRUzOQLud4%}7Sjzp|3JNS>^a');
define('NONCE_SALT',       '4cew@qiJH$($/KDB;-NDs|tE&VLH MS^e;dbKY0dBLT2.cU*~J-ctNOR0/N?)Pc(');

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

