<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FSDB' );

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
define( 'AUTH_KEY',         'b%;hp:X8_Yfeq6#g=&>~TETa>C:z0jQe#@(h=2T0HW UQp #cyA}`8d3CKR!)9.W' );
define( 'SECURE_AUTH_KEY',  'J_.tP%/&/fP.]]H#b]6P)PRrpXI#)c/Kl)I94-.cdR]S:*HgA$mye;4dD^g?oCy6' );
define( 'LOGGED_IN_KEY',    'Pl(g-08#2%%/(7R2oTFt-Rl7y`<*LluFD*E,DaTM#nsp@Kc<aLzRF{NjjB`__K9}' );
define( 'NONCE_KEY',        'h#F>]mN$7EFcaxXL+6F-ro@TXSM*W~l$J,[HVB;KwAOb!q$DKBTM,:;_{O9??[1+' );
define( 'AUTH_SALT',        'dOOEhU1[76zmlJ.nkwl(UhGTAhKuiC_.%mbNC=>1d}5i!Fo Fr5nbrMCJCo`++K6' );
define( 'SECURE_AUTH_SALT', 'Yu+d!%<pLHz<i+,cZIwpw:5bGy})_6#:]o>kU^(OD%PaVH)92n`0i&rMNB?d=zmf' );
define( 'LOGGED_IN_SALT',   's`)hW37tq/dM[d05czuBE[~zjw%UH.tPM17?C&)Aw!V,DaQ59Vv%w`V=@KJatDlP' );
define( 'NONCE_SALT',       '[?j~X+-<0x|*_P>I{iBw5UwM{5zaY{D>nA;o)INE:uwTJVAQ9-;l-?*=zuq<|]mX' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
