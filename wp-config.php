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
define( 'DB_NAME', 'atifportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f>y%/.a|AoO_oj@wn&lWnB^UY`GPSFz49aB,D{,<GaLIftG)b^k1zS`X@UOjoHGy' );
define( 'SECURE_AUTH_KEY',  'My!s{^j}mY!m`C2DhF#,f01 (|9u!~34~VzMVEP>1#?I(Yzlp)T+@{G?^Ks_,|3A' );
define( 'LOGGED_IN_KEY',    'LRazU+L/O`?Gn!3CwuR7x9=x=! %pj;;bF 9`hZw!e 7(&sepkNJJ*)v( HHWq|~' );
define( 'NONCE_KEY',        'cfkdj%5kY{y)|A<oXgQ8{|C#p-t]*9VvU*LqS5woS-=kOVf?q^uCc]!]lpz0_^Up' );
define( 'AUTH_SALT',        'V%upBN]R#[PP91IG.+BOb!M+.id~p.#uXWP!Uo,AiFP,TK@#.MT>VRFG&3C6~n;7' );
define( 'SECURE_AUTH_SALT', '1CdFQ`6&WE8q9z3+1fsJj97:s1E#-GY62MisEeGov8|$HV>25#Wc1e3OX6^fzGE>' );
define( 'LOGGED_IN_SALT',   'MY*?Iq*k0[vZ1iaAjhNf}`r^9e^vuznDhP(nF;[<Ze$J%qp[.)a+6#P%DM81. .R' );
define( 'NONCE_SALT',       '#x-fkhL721ArPN:pD*3=v#iNJH:q+D%X/]xYJT6A{s)R8t_.8q7zm&qR~<WedA*0' );

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
