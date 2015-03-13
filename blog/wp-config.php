<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'blargHblargh1');

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
define('AUTH_KEY',         '3^UvlRq_u-bgL.T(DOE&viW)iTWK{>P,AUX*1G]#u^Dn3uzV^`0)Safa D,W=w>*');
define('SECURE_AUTH_KEY',  '|VY1(cV8f.hW>vReL~?hf%^0}0-FYhHkMA]y3pY`>qOi &m-f!oPMd>QKO?Oa|zC');
define('LOGGED_IN_KEY',    'Z>|;>[`bNIZyGT!`#ZTYq<a79Q/i95eDGRlSq| PJjC-u]vD?ZqT2sn@-{vMIp?E');
define('NONCE_KEY',        '{]+2Fp[IQnBL-eCEP188-G|Wv1AGZFl7x6:se-MLO^]C(A$^=d*h0V2*$|(6)U+<');
define('AUTH_SALT',        'W4$&?:6o{+*l4Bk*twL}DQvp*8QwCI[-5R5. ;Aod ^t.)8YNpwx6V1WAxYiGLo/');
define('SECURE_AUTH_SALT', 'hCzYyIku6n)j@^>%L65C;ud-i&a$`,#T>iE1j32JV(SS=/&w|M.&UP6KIm[yRFa9');
define('LOGGED_IN_SALT',   '*8L9}6#.&+F38Wye1gp4ZIFUFnXMN+27O}gW}2hP~1%-,T|SPGCD<2,-:#nMS$)I');
define('NONCE_SALT',       '`.(ZW(sgwqgsEWGv)9WkD{ eSUHnj=9CzX@0-~uQs:@bpKpytMSw&Em.E;mUR+KT');

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
