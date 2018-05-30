<?php

// generated contents of wp-config.php, salts, database and so on
define('WP_HOME', 'http://test.local.inouit.com');
define('WP_SITEURL', 'http://test.local.inouit.com');

define('WP_CONTENT_DIR',    __DIR__ . '/wp-content');
define('WP_CONTENT_URL',    WP_HOME . '/wp-content');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) {
  define('ABSPATH', dirname(__FILE__) . '/wp-core');
}

/** Sets up WordPress vars and included files. */
// require_once(ABSPATH . 'wp-settings.php');

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
require_once( __DIR__ . '/wp-config_local.php' );

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
define('AUTH_KEY',         '.og~b{Bcw$9*+<u:m[ER_Wv4>Oy<G8Q]S:|BgvU~D@DwK*OylgR @^9[voU[ZhQ%');
define('SECURE_AUTH_KEY',  'z9pD!%$b7CdSd1[O9QHtH.1wmA1s@R^R*q~O}}-Kp7WxG_#&#?F>(/Pb0a>itr+r');
define('LOGGED_IN_KEY',    '{}.?k dGuhDn*<,:1 wD]5K>{w*CCq[h-5QZkyCj=KH#KLJxfDM?kLdA:>I=J^.?');
define('NONCE_KEY',        'EG3.X~x;Xfpe^nuWbx=Kj7?_IMs_`JiltLe9Lrp82^%q6.vJ;#I_:5xZY*Yt!tDM');
define('AUTH_SALT',        '8`NWI92YQ}JIx9Qf`{>XJg<HavsH!ak4Eg}mUKf/(iS[.f)Y5N]@>$6*CJt,.h}8');
define('SECURE_AUTH_SALT', 'f~5(i }E&k}]w;R_KkI._qX~8!1;Lu`*]O3+]1$Pj1a2$=YNUY$J-x!uwSX!O*i8');
define('LOGGED_IN_SALT',   ':>?kq@TLQ6Y:JoVx`|k-A&0Vs[<QYs wCM=%#UT!Wq(GZ&l]uyhCe.9D>GCIQ(`_');
define('NONCE_SALT',       ')=>qz@O@C+V@9kQ^44MW#[a1mh%^!oUIh}8y=h}~^1^rszl:_5k4nI F0w+(a^Y5');

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
if ( !defined('WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
