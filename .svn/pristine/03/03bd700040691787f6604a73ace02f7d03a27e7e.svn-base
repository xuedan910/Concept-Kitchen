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
define('DB_NAME', 'wordpress01cn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'GaA:d-Xd3y16M92ofTAkh+FjH$xa%`W8<Lk?9&Ba7FVIKC&(,oQv`S|cXOem}8b?');
define('SECURE_AUTH_KEY',  'B]p)5Y/~%MJgHR*3,<2g1>%uPhXhq+zq%)?=s/20a}oyOB+Y7M#VT.spGu?O>|X`');
define('LOGGED_IN_KEY',    'uX=e+2R3/lVMcXE%<XZI7FpVQ$d98kbenaB_V:>I=>X8J!a:N0=[t7/ae;wozwNW');
define('NONCE_KEY',        'rPKHV5u!Qt_U].<Y05zfs.uau]#<sO44s5*([oj/k^9ex>+sAQS?D[KsE6m4u)Z~');
define('AUTH_SALT',        'MB&rM[tMon8i2iD*mIIR~~xTn]}w41e,DIL;ORLK+7JH-&(mi.:fYKg#xeB6*@sE');
define('SECURE_AUTH_SALT', 'zL+QiG-GkfWCuwV0vT](]K5M*9^M}a~>Tvw<MdH,u<]>9k6]xBS-EMv9W@hG70p_');
define('LOGGED_IN_SALT',   '|+[2~d7(4I/_|iQ`CnU:R6zjc]t1G(~^m Oy->o? aDTb8a>9/f=xtjb1:I<VA+6');
define('NONCE_SALT',       'Rzat:d(Opx9/-4&dq].(WHR.KNca>;kA+$YD/TUxO(dh=IU8F?^bh5gO~zJwO9AJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcn_';

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
