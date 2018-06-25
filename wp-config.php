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
define('DB_USER', 'wp-ripu');

/** MySQL database password */
define('DB_PASSWORD', 'wp-ripu');

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
define('AUTH_KEY',         'Rif?oJ`f+Nilx(@5H>stj4^tZr$~3}ZjnCM^1Ao21~}DBt#{24,wfz[V$zEhA1ta');
define('SECURE_AUTH_KEY',  '((s8z;^L|CL]AYSv+=j*Q*0/W:-r:FC$(8g,W]mK>.4D|VFDh6wN<;O Q<P{wmS)');
define('LOGGED_IN_KEY',    'RgPp|e/8UenA{tjS(|~tD@Lro[l5e4[$<-KK|OX5@[f cy_e~<F;bv049f(GdR~M');
define('NONCE_KEY',        '~&0wWAd|F>K&_U!R0~3aZ-j![96`xfs!Wv35iXj4}P0 *p.mZ)s9F+M<#4EQvLm/');
define('AUTH_SALT',        '<;Lq5Ct[TL,up$+2#+Wo.; ;Mlj@L3z}_q$8M)XnfD#4hR[CV.+~)0P_]|X~[tlK');
define('SECURE_AUTH_SALT', 'FYt:=)>ahhs!0;fA^IKyW2b~2w~AlkTH^+CrVNZe^~RiU?bD.YUxQeA4N08t~qqQ');
define('LOGGED_IN_SALT',   'O53D<7Q<4G|(+BOmYmwPVyu<JC a@4BtP]Z:u<qEld5K[3M3=p7dpHAcFZC2.8~U');
define('NONCE_SALT',       'p2;k|B``DVS3EsDc5t|ueYS/@gnW;KlNON`bg{gK,NY^T)PHvJ>D|t&h<L,2woB5');

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
