<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'this' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o> TG^B>BN[FbS2i8F^klz}=SIL cG+>qKw+RdY`^3#[d^zP<4DHqwwFZZ~30vJ^' );
define( 'SECURE_AUTH_KEY',  'eo}o(v,|9yud8GdS?ed4~m$ur@0TQz;Zk(!:T*s2R}e#GzbwXbj&=t?-~D<!pQ#^' );
define( 'LOGGED_IN_KEY',    'e!2EiE#eR,~qPH6:16cFnS%>>RnY:D_}p5H,_BfInDDxWd$a5P/WFm9(c3=mDbWK' );
define( 'NONCE_KEY',        'Q3w3PW.k6 kJX7?55AdnytWx}J*|O zj>ggz1/@oj=%$YJoY8S|Jw!_m$qvAzKsz' );
define( 'AUTH_SALT',        'C67PPI{V47rTz`e0b[s m 8X2PB|z``3J3=7Du0VPa3A_*Qq.}nGG<$9Cow~g7;]' );
define( 'SECURE_AUTH_SALT', 'TfZ;E5pBzD&1u(vIfe3XAyt5mu%wOFaEyy!~^>bjaGW2lhYVllE4$$V)Kh@42L*T' );
define( 'LOGGED_IN_SALT',   '}h]>szUIE:6]}-oLG(p]&&X0CXxNo8iFS]_Fi+aY).1 NB=Dh=_`=sx5^Gw>I:{v' );
define( 'NONCE_SALT',       'i[Ko5J5%kK+0wiPxH>,(4F cy=)7p4ACz:xy2g9]Hj?O4&iwpREy(+nC!N,8!H_(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
