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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_portfolio_website' );

/** MySQL database username */
define( 'DB_USER', 'feroz' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+QoN;wpl)GN6)VVdM}DAPzph. W]BYy~@JDwZIMy%+o3kC~& nRtcy*:z)Rxwnvm' );
define( 'SECURE_AUTH_KEY',  'Af4quh.wt#n4Vk )i<?$oym;{{T*9qG/TrdCW&}Nlm#Lnrg[JXNQ^j^H2w:;|Ddi' );
define( 'LOGGED_IN_KEY',    'sh@m7jrHU$XQIf&@qUQX|w jvmb<OMh9aaD@hq9a@ d|+Lk[sE0l~$}x/YWqKU>)' );
define( 'NONCE_KEY',        '?jd8N6u5(t3g@(2h/O?T<G Za?dc8OL )lkJHi=;Geo|W,N(4/L+KY^,)(yadp`I' );
define( 'AUTH_SALT',        'K5Rp`g*@2E23<j5rGkAEn0~|A}k/dzO%v ]TeJqFL09[jQ=h|dDD)y/YhZMhiS]@' );
define( 'SECURE_AUTH_SALT', 'dtmVXoZ!!Z%BIvl!!~6p!Z)sd#K_#ET#=OPVz,!O}<>R78u`OKL-}q?0,6lK[=S^' );
define( 'LOGGED_IN_SALT',   'S]!MLv8eN9Sjz_Et5kQ6R]@@M<T>j3EWdaC; TQG)F~i+bb(|b=nDOC/SnDUF@4S' );
define( 'NONCE_SALT',       'K@[=8%{6 g8bxIR+P??y|D`smM{Pc3gM]9_fWfiOo4X7Q{V>g@.BR30#;,tI73qW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
