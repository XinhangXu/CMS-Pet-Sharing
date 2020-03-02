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

define( 'AUTH_KEY',         '5QL^K]&QWYZ1ji_=3d3?hg}3Pi[Glxn%w=lHiagA,]3.4SLgoYS52uv|BpcT?.p*' );

define( 'SECURE_AUTH_KEY',  'wXM=*TENV]Rzhi*Qzh[.4%?h{hT=$&_[gfftFEpDpvX!Pn1T|Mr|=jyqWwTcXd#q' );

define( 'LOGGED_IN_KEY',    '=E}|](pBM?_G.8F,p>,sf>7v%zKY+X).Ur1SBOlHox;{+2Vd>v}%PeTwK;C-^WXL' );

define( 'NONCE_KEY',        'm]D7m-jaE+u*dZzM|TiU.F4|]pA14zJyn%)6afuC$>Y+tA,50/IT!Xu[!N8mrh?y' );

define( 'AUTH_SALT',        '/pDg3{hI)}~`H5x(/Xr6_!V.m3g8QNgVE^U+4DhD$$HpGF0fE^w:i6^k@,xsFAJs' );

define( 'SECURE_AUTH_SALT', '!Q?(^= `JwW;O;`=PR[vQbN;P}V0x}i$}E7cEZ0MHc)NA {Ze;{Nw4,I+99VFf@%' );

define( 'LOGGED_IN_SALT',   'uibO:7`Q~|?`.M6tB:P,}l:_1=b/rq3d.YL|!}5OZJL^&Ijb@>m9jTw6NP&+Ox:{' );

define( 'NONCE_SALT',       'g( $o61U`SU jZ6J:M}Ll>ya$3Hgm#lz?s@_i2S0oV0x/d7:@2 mpWMH7:EaEiu_' );


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

