<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yugyugjiyo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'H6]P<cR5f3Q~V&/*1v(Z&jtal;DzR%]Nl=G}pkUqwaBsoP%(@F(kQp[;,A[m-+`*');
define('SECURE_AUTH_KEY',  'FNLq3{ZNUGQ8HU.wvn|4&T57h0z8(u51|<NfC(SHkQ>;@{,b`){d_c!LrJ]$6_G_');
define('LOGGED_IN_KEY',    'v;a^F;Eo*L^}_Rl?+_ej+?TCi`+?e9Gz;Lp%GGFV>=o#l|Dr@xYnwZ|TY~DX.pYs');
define('NONCE_KEY',        'Xv+x&IPbXiZ>[ k]&hVO8%Xw*eDtzRtO*:%z<_#C9{&hd%wyhw|b0rZd*a/Ac>|H');
define('AUTH_SALT',        '{.7|G@xkXQ`tAKovEKM<{8$X_Dh9f{bldIsx8vQ1fn<$-1+?8LP0qCuSZ2enA.Pu');
define('SECURE_AUTH_SALT', 'T|+gip!Bol:`+9.+&<>F-71$?#w{W*fUKR^y/BCM4q-(zqJ&,DD+Lx]]B#gvM^Sa');
define('LOGGED_IN_SALT',   'Rc|w~`usK|#WG6&$-T:A1W)!%O!F`)w{}60|;X0R!NG+eMQrQ|/5Sai((Olx0T(J');
define('NONCE_SALT',       'Zxw@0SL?`@(-Rq@$7E1-h6u;5y4+c{yE_.*lPa^+< R)<sCm?xuot0wv!LvPx):<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
