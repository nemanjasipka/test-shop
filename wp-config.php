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
define( 'DB_NAME', 'pipegswc_test-site' );

/** MySQL database username */
define( 'DB_USER', 'pipegswc_nemanja' );

/** MySQL database password */
define( 'DB_PASSWORD', '(J=rH9[7fx(2' );

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
define( 'AUTH_KEY',         'TOa@jD1OE=7DV~Rsmx<VEP{RIY?N#x5DU,2eIuPfFJJVjAo.N`%bW3|+(LO;)FYx' );
define( 'SECURE_AUTH_KEY',  'L$iecMN+7C:K3sgk5n%0cqcVZ{n(85QJ2(4rSsclBNS}pqU2%3vrY&=Tq+q`EyMT' );
define( 'LOGGED_IN_KEY',    '#-C|hiX8nNvnx|AJ>&(fwmpT.5Iw=UQO,BQ`jl1B-5?4fRQhLhA,~:IjXniO&N)a' );
define( 'NONCE_KEY',        '!iSA1LQ}[9[ufvb,V809pe4B~1Kbiuy[]8Pd<KdZnVZmNvQKPtb?S<9F6[6 t@4n' );
define( 'AUTH_SALT',        '~2}HVE[fmowbb#qT~kg5Yf83=+U#%Iz?f*WAI*/wz{>FwF<KmOh^T~S iQA{<:qD' );
define( 'SECURE_AUTH_SALT', 'hb)<>s*JE*udiC9ECGKd#iegg/_^~p5/3FLq+pLCfQFliK`}k.F@.S:TH/r#V~Lu' );
define( 'LOGGED_IN_SALT',   'WRgQQc8QOG8cKB-_Nda:}]84qa?h5-RTQ4$@l}D[0.k~-VCd_>)vVd=1()pgWe%g' );
define( 'NONCE_SALT',       '..fL_`7B1m_EP$y9H(h0[ydHxk;YGY129b19,7deRV2FGQyKk-:fgNuKDOp:i:(-' );

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
