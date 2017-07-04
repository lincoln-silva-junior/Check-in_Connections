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
define('DB_NAME', 'wp_check-in_connections');

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
define('AUTH_KEY',         '1Pwi-%FWvYa6+6C1Mu+GsEfEljP.,?tNBL|L1Vc=ZODC4h#WojwY+J6cWCArh,&9');
define('SECURE_AUTH_KEY',  'OF~`q8[:7D4<)ReqZt[&>}b:_VBitn+Y0UcjXm`9`zb:ZuMSX|,Ua4!0SHW`..yr');
define('LOGGED_IN_KEY',    '?%A iEX7K*#q9pkk4BQA#V#rkqP,$80[+ ],/W[4[ 93_[8dxC~@hP4D0fZY13uA');
define('NONCE_KEY',        '~8<?4^sn9DW`pG^8Dcs%4Q-9E)}KbKs 7q$[8n@s7ffJYs)7+ZJoj]p3YOjx(_p)');
define('AUTH_SALT',        '74i5SzM2^]*^7l{9+#7qE@(8Cw0}RIsK-.xC1,bT*NQm_Xnb3:GM/M(xFIF 2--n');
define('SECURE_AUTH_SALT', '[RDV*~0Q#b5G1|H3zzu}TZbb:SekdXA|@vj]QBGPMX~F$(@0OfahX4#riDX0^Tc_');
define('LOGGED_IN_SALT',   'Se4)`5S@ipMM6kRvK%81Tf6T}{4Wbk$wxFvA 4k;LeWB.*S.j~jyR llMI`iMK!U');
define('NONCE_SALT',       '@,Qou1VaEl09D`?[`QtKzx^NBQk%7I~DO5%YxMXmkSHD2[C,2k,P/V1rnW@hIPqh');

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
