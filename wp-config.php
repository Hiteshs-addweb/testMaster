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
define( 'DB_NAME', 'woocommerce_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** To overwrite the popup of FTP while installing plugin or theme */
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y-J,KU=mC`EHt-? <+)%}g9cdAp^qs=vW5J?<k:@{:)~BM@.` r;eEsXj;,XeF(B' );
define( 'SECURE_AUTH_KEY',  'Wivi;2C;3J;K8Q]xH@r3ER_h)i*5%3ZaJ6{q]wl],8<]v+Bf78E>{h->eKx+FNCu' );
define( 'LOGGED_IN_KEY',    'N>FNQP=:9EOPvb!]d3nLs1Y;$vVlv*.506<xe9/:G%gs{n(#oq,cOg-HZ|AEcF0m' );
define( 'NONCE_KEY',        'j}9^5)G,<_`H[j 5)^/=ZO(b;sc4na&<cU~hK*M_},]xfGMZerJVpE_1CKM|`9A3' );
define( 'AUTH_SALT',        'iH:b odxAaX3X,+K1|UtHqC&)=:S2v5uDR:UD?Tz}ByR)_g,Z>62h|7s}p`bSNBT' );
define( 'SECURE_AUTH_SALT', '|m}4V|;GsSm%:4Is&zPvjZzdP7(Yu8EqX~f7Xy-pq}D,}Vuh!7L<+V2qbr*gsj_N' );
define( 'LOGGED_IN_SALT',   ' %-QCYrX!v5;W?zWC)UATw:#9Wj#?PU`Zy;}Ul%Qe-Y2b G=7U0lgmh5(F4.U-]@' );
define( 'NONCE_SALT',       'F3ao06W;V-m6)<](8yOtMBoE-hL*X% Y(?qNdo8!.Qxa$9k8nk#N@N^+S?*O3)Id' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
