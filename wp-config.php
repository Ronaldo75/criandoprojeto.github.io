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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         '$+ijjf%t+lJB5f5&^df)(x@wX;_JyX6:#f.LvB7/o|$:it[,5KJ*l?E8uwyH OhA' );

define( 'SECURE_AUTH_KEY',  'U-AJ`CC$_5w099fkLOdf6rWLrF#Upo|l*so1t0kl*HdzMD9 <p78nttqb$B#rj5A' );

define( 'LOGGED_IN_KEY',    'r.|NM]ea2((?hK5[1@}(>_eU,:ZLc$FB*;J#Zx3?Rx+G~sJb!jC48=G<ukCA`^l,' );

define( 'NONCE_KEY',        '0pA{Gdv-uy{[/iP8w]&x1m[|wlS&xNSfU6_HKm}MV)q%j|o&gUQ9<WCLMd+u<{HC' );

define( 'AUTH_SALT',        'UzMx<*{l~ r&6bx%o]*ObRe8J9TV|KjJ*QwbjmwASfKj9+:^]gnc1t@i5:!E^WHW' );

define( 'SECURE_AUTH_SALT', '7tcp:vnMGq#/?M_G1YPSu`-pwWlnf2vhPwXf6o3LX0N#,AvQSxKcl{e6Gk*?~e&{' );

define( 'LOGGED_IN_SALT',   'fxhfoj30I@,Iz^7&efG[>#BPe[RnS}|+GdpyNp*u@L.&.#bwY7*^_lyg%)OO-rZJ' );

define( 'NONCE_SALT',       'V-aACWQCk/AeM?tfY$b-c;m+Q8{LW=`Bx_St/i!dZC$y~7X66)s/qoT@umkt1jq!' );


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

