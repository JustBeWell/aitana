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
define( 'DB_NAME', 'practica' );

/** Database username */
define( 'DB_USER', 'anico' );

/** Database password */
define( 'DB_PASSWORD', 'anico' );

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
define( 'AUTH_KEY',         'Q.Kh<b:zTJx9hl^CNZTQ5eYEz;<:Cs)M}c9_ w{+}T^@C9;AKVY9c&)|S.NPvDh;' );
define( 'SECURE_AUTH_KEY',  'X?rf!rC[5Ocgf*IQHkF0,(el.lc}[kQ|e:TN6!(_;o6&/-.,)ve+q^#a`Zbx~zNj' );
define( 'LOGGED_IN_KEY',    ':mTB9;{Q-Ijc;O]:%}vxQ;-Y8tx FCCM fsUhe47r%+&FOuGM<:NHq6q(lAQk[KG' );
define( 'NONCE_KEY',        'kD2UU:w+Lg]&S@xkqn)+K]zPDy[&JG|ug9%Tl&;FN0Ym;(3~u~{jP#;vEKu(?HL=' );
define( 'AUTH_SALT',        '&E?CdR{O{EBkqT+$`P[6$FYZ9=^dO#xs0e^0Ae4lJWxhr:_C_<BI{5p@>(Ub}cS*' );
define( 'SECURE_AUTH_SALT', 'w[E^gOpiuowO`-FB^ YRA|L@{,Z9-/YPp[)yydVyb({0B[W63&T}8VW}2es@Du@3' );
define( 'LOGGED_IN_SALT',   '/|$mq}J9#@=ZbYq$2jvq{{(OTg<_IDv5}nDr|04kLrJ/u5c:pTFJ*b)`VVm@u$&?' );
define( 'NONCE_SALT',       '[@iTm04s_>>%]u-lU#1#wcwkm;h&clrP+wW^%-a4.*-LJNSnr~F!q<EHC}Odyip;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = '_wp';

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
