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
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Er;U0,3zW7xbLDDEt+~4#v4_[4eOqHcKr^nm6z|qQ$r*Dtp=#.vQP8qZ3K?rJCVY');
define('SECURE_AUTH_KEY',  '}+AHRlK#!OjIc{w|[jP6$+No}g}xC=}K^Z/ETFOq%|>*^XsX(0w@5M+wX87<0x1|');
define('LOGGED_IN_KEY',    '6sL-2BoH|1P!4&jYLi`Xzb(rt4*ySbiF=9|p&RG$$5%[9|D:lWBx@DT|iwESnm&-');
define('NONCE_KEY',        '0myN2ukze>/^K*|hxmUlAhZ.&_SV}vRj*Qlf6IkTlcp/~Yr|Zqsdu-58uE17ubDP');
define('AUTH_SALT',        'oR5~Mp62W+/JL|54V2++~el6*@_ol]b.4wATHqd)o`,$J_W=&d ~(|%N_?2]1QJ=');
define('SECURE_AUTH_SALT', 'vfBm%fwaK+A$Ry~?|gDz##(b=s_RZ)Y7rJ*-M?d=bA_0Ol{0GFsK}/Rq74.A.Vbi');
define('LOGGED_IN_SALT',   '@51Gv@gZf_(=`~?R$a ifty-6&(L2{Ja9JVSwa;<!>BUB%B@|?:AsiA-12HssOy)');
define('NONCE_SALT',       '*j.@PMNb2I0?7%d3pFUXWs$+J= LoU!8^>6WP?Gn^-=r1^?&7EeX=luq<)%--Z5S');

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
