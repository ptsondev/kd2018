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
define('DB_NAME', 'wp_kingdom101');

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
define('AUTH_KEY',         'iu1MipO9T.O@.Nr@5}-7tduTW*}{8Ebqk*zM0<.Av>,?jRvI_A?0Q@&8n&1Os~;y');
define('SECURE_AUTH_KEY',  '$5nz+P^aeom1iM-G<^Z0t2W]d&2.Jvo56qQGQ4[u~,mufX~cg>Tf1,gv:p1k.JBq');
define('LOGGED_IN_KEY',    'DWKk;h_9tGV1u-Wl/`_3_ne KfSEcl+S*cLSfxL:S}E(#g~?:<9Kl$xO-t/0D+g>');
define('NONCE_KEY',        'grhL:S=5y#%&)u}6&vnA-9E4ykI3M}_=6xD 99O0r$A[:7K-omty.W4+37F_w;31');
define('AUTH_SALT',        'T!kcwOx;7)f[U:){wRfWc3CYeEJ]h!&COGq)-B|-p{uM{36}3D1P|tvYS$ZX[ue#');
define('SECURE_AUTH_SALT', 'b  m4p127bMG5+bXcb&6=S{jT HLUcb.hMAi3FFac$a?S(;4m1TjexoRa{#k[aJ>');
define('LOGGED_IN_SALT',   '.ZEDqGGOFP^@.?Z&C &OI$GMmDK{2hb7PEM4#PMzwp,$<HndQ8<IK531(r`ZxnTi');
define('NONCE_SALT',       '@r78,>n!EW3#g[gfcG-2O&ilApf[e|uu#TuwIDjJFWHI9e$[70;KK:V../Q}kv_Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'k_';

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
