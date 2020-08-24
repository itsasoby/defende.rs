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
define( 'DB_NAME', 'defenders' );

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
define( 'AUTH_KEY',         '/LxahCkd`FCnPb>lf5s(6INYn-mVoAl9wg]XH,$zm0>0m9vFjSCA?`P@dyJS>)f[' );
define( 'SECURE_AUTH_KEY',  'u*mbU$?UQG%1}uT sZqIFk**w0VIJU?!g` 81gU$YqsiE@s9R #K- pKsCCH($Mz' );
define( 'LOGGED_IN_KEY',    '5}tDWXg#E1ikPnY99Eb2Y3oc_/yO/zp-W,uI8iUz`CP-b6FKFwF(OT(`&/kxqB1F' );
define( 'NONCE_KEY',        'IDXta;fHFG)hx[O-N gng#%>1O,kLi2V[r)~8N49-ju5*qQ9hV)hQK!!YO:&rNQB' );
define( 'AUTH_SALT',        '+Z3qXj(i3KR3GpJ`x}qY+^@mTH`8`_nGmZpp:2o7]%s:{[xS[.6Z[] /u34Ris]&' );
define( 'SECURE_AUTH_SALT', 'U/4W5`6<-@slV MMocRE*^j{e+(+hcV&pR<+mSsjvy3d2G-7f`0k|%BI2}{wX+U9' );
define( 'LOGGED_IN_SALT',   'Z5xK?|emJg`=&#bY1CKDdzo/c+9cI74<01Ss?7$]{~.-V5QPd+S+Lh{D_Y<**qOK' );
define( 'NONCE_SALT',       'vgS&()EiE&m4OOQ$%CT0Lwbr+N&13mBl5/a&{g5u,3ZZueGje:&/I2ypy!flFmjy' );

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
