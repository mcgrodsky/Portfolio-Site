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
define('DB_NAME', 'portfolio_site');

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
define('AUTH_KEY',         'C?7>X_$|M4qn$=yr8:TWRNeWT!h<%d?>T1(w(i}1o}R;?f6s1LidGQJd23,r8)[x');
define('SECURE_AUTH_KEY',  'cB?.Bj_to^;3T}0_yXAK}{(wc7H=bPrsaXtqP}K%%<&|7LPmp8Ryu>$;/]BPx>>0');
define('LOGGED_IN_KEY',    '2xaAtqB_&GHc7oOn{68^TDx(7pJmyf)D}yN-XP4BcF}1%LWlrZi^GqO>Cdi,|ayT');
define('NONCE_KEY',        '<T#%`qI4{HG/Xu>(`O.fn%Kgmo7U|Ja4nhG3_dj+nJHiIhkZ!b%&W)j4Q3{l[k76');
define('AUTH_SALT',        'Tt[g2w@9@BV&=([:t,IL8RUGJu%HgV#nx|Tm q?ln *{Px4IILK9Zk:jH@F&+2ZE');
define('SECURE_AUTH_SALT', '/!7Qv6Ki>]D5xPS8d==Qt.d;Ls4GBg2C;Ui&Td;r|zM7cv*0z<WPI8X<X DXTY%X');
define('LOGGED_IN_SALT',   'n>m(p;w_ly`7U|#VjAz^j#A6I hug_g~)_Pp{0Y_P7!kc[.BfWkuK>s1+vk)$oR]');
define('NONCE_SALT',       'M&]$V3$Q[Ak7w-lATCo!f-)rzc44OX#hF*#a-Vxn=4?e-6?kr/CX#Y-F^vA~)if:');

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
