<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'antheit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'youpla-Boum?');

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
define('AUTH_KEY',         'OIwBuCa#uA)3-UC*5B([(#.1;dx*|mfJaZE6.A^Z+-Lv2W57V)|7-<@,mMV|{l,3');
define('SECURE_AUTH_KEY',  'Z#4|)Z)H`|quW3Ih,e0.F}AJ>%Txg+.lDUl9*}|4ICSa.RI^98~k y;:@WEWnoX~');
define('LOGGED_IN_KEY',    'B%U/:>QUD#QV@Tv/2xjZ[PL*H*0EI|T,]D,n4+_(TEDKd.R3q*B{x=p9OwE;V0KB');
define('NONCE_KEY',        'f^x8LhyiA1%$YdHC)k|m_#hH(3CeCC}2]*TQ>4>q<h}^+V$q#pYLj2<UT+Hk+9q-');
define('AUTH_SALT',        '{[OM?[I!oF`/;;o]+ygtJY +(PjM=6#3%=KmrVbTHIS;#3>zy+<O~h)Q/+hnhYn+');
define('SECURE_AUTH_SALT', '(z/&8Y9>N}E^8ZSdBtO&Cg]FaT/<`t)bQ:Gy5m<}#CjdHC#dlrtcv9BrCEd]?}my');
define('LOGGED_IN_SALT',   '6*FOM20GQWMQs3n8VQ4kQ`X:|R%qr|.W8RSifdwM0q||~AvuwL<Bu-zZ{#(?>x2e');
define('NONCE_SALT',       'OppA%wxK1f1L.]7;-P,@7BIR*`r}>La]>~Ws+OJgLE.=%P*Z}8? 8# 2%?dT2lir');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpant_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
