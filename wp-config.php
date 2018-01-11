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
define('DB_NAME', 'fenceweb_1129');

/** MySQL database username */
define('DB_USER', 'fenceweb_1129');

/** MySQL database password */
define('DB_PASSWORD', 'e9boa6Jkv1B2xKdX');

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
define('AUTH_KEY',         '<$G_sf<5E-O.<VUKG/W`6|UF5}gh]Sol5Q[]GVntTI|[AVXY645hgtmeqgi1.*T}');
define('SECURE_AUTH_KEY',  ' C8z>cdyGI&ohvmZP8z+;j0ZX|sGO-DwBoNa{$J[D/J7=n)7vJdwv?<|DT!cA_fR');
define('LOGGED_IN_KEY',    'jDTmX[ydQg5**z{&XDp5uSu=?x^O3-;0Z/tZ7^{`?bvUgtH8^P06/f&{9#cj$&iW');
define('NONCE_KEY',        '^qc-;}W0^Ad{|o4I[cbz%0;+krf8%h6`^8mSNV`zLLA2v;JWDdxI|J1UgAKhbSA}');
define('AUTH_SALT',        '4HZ KRr4 K&H(8x_&(BXI0pzU=/`C(D?%@^`FA&-sLH&ArW88]M3l,GU<DD>4-#&');
define('SECURE_AUTH_SALT', 'gj>.8TG<PZxS,z7UZTTrdITeEZ-/52,lqm )$lD0CkM`G*xbdICl}eCMCfHjYW,[');
define('LOGGED_IN_SALT',   'n0e@8z{_Aqt6?YI@G]_#ZO4+3N<Mz#R?dQ;10n8*W_xhJ>Yd%p-+Csyuzsyz4W~_');
define('NONCE_SALT',       ',esiJVV2q4)RS4@V]U}N*r13ZFa`{uz*--LgMRg[c,Xzo?<0@wIN>Bd/JQEzl4uK');

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
