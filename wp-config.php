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
define('DB_NAME', 'pxx_db');

/** MySQL database username */
define('DB_USER', 'pxx_admin');

/** MySQL database password */
define('DB_PASSWORD', '8673ujmi38optjk3JUEEHnekrj7487');

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
define('AUTH_KEY',         'i[SebF1+*VIov3-B4fDRvla;(+$es9/n4e1=glgzf%TEhtIRu&uAbYHgAZ=J5wH7');
define('SECURE_AUTH_KEY',  'Nmfg>{suhhiesF^_&Np1}|Z+6;EM^DU6@LyBChu~LcWZm(I;fyCR}.VD?XCO5P5H');
define('LOGGED_IN_KEY',    'b@j3VT}5>L+8?}!hb=39sAFN2= (7fX73H4FB+)u_6fEtq9&}}i>z{nQYcl.}VFd');
define('NONCE_KEY',        '7/97?/`mxixD{89=o.!PL@khk)nzA][{|%2UH2SA#C,dXgdUIu_F/%/85sGL0,@b');
define('AUTH_SALT',        'p-ffy|`Ck|=+B{_VvI.kjAc&?`F4VE.^F>B8$VjG,[p`2<gi(h!Iy@lPg`:DGF);');
define('SECURE_AUTH_SALT', '16JW[C,#oNn>.8@v6i5;w[$w^>a BZh54G/=Ve-;.nW,9Q_-rJ,x7CqNE49jL+ L');
define('LOGGED_IN_SALT',   '~{]ug?pZKQZ9]/K?6/nu0Uu]I:-k_Bk!QKm28S~^nE;fA}a]@h/[F2:C2pjobmwN');
define('NONCE_SALT',       'EDdjbII]MwjbcOSik5atyejRM<P4)>GP*9:sU#yP]Goi!5+i?vlmIV(ja0/Scjo?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pxx_';

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
