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
define('DB_NAME', 'wordpress_1');

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
define('AUTH_KEY',         'l|-]ZZ0H47JwBtDP]gd:QP muZ3%ZG|l<EL-Q+t#?^3+M.Egd=+ }vBytSQ>(=fj');
define('SECURE_AUTH_KEY',  '9kJ~/)VP{$^$$_yka0wo}(h(_}X+S*yU3`?%2NqvNjKF2RbTP,U%Hys7>M`Sg_}[');
define('LOGGED_IN_KEY',    '),~FL&|A?B$%0HF2&q*AzqkxAyyhK~Il0E?XO09bohSZ_:66u=a`=$itybu9WkO$');
define('NONCE_KEY',        'y/vnAjdfvE>g.8 ^Uen^hbBXI}RV|p(8$`k|jnLt=2e^-yW0ad*>Tc7oam1)}t|0');
define('AUTH_SALT',        'vIU,eaqG1[M }Lls#`BM~J@pc;{7(tO!X05hiw9*UfKBTZ4D/?Ou*|Sw3QSk}/_M');
define('SECURE_AUTH_SALT', 'x4*-`V4NvPOL.f[Mri|feU^&R%B`)4DX=U2$)1z1 :M5$>cqcm{9u4(i.R:i&WA@');
define('LOGGED_IN_SALT',   '9eC>xIaTW9s[wfFEa,jvgHS uvNb{Gt~6iE$jMd%V4?Ww]ez$KtEL1sqlW,Ph~w_');
define('NONCE_SALT',       'I;[1(PQ~65c!IirXJ2T5<,.j!:U_qg4.~W>1P7.rvMrp8ND;vlAavACLd?lQ$?L7');

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
