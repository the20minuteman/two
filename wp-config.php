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
define( 'DB_NAME', 'two_db' );

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
define( 'AUTH_KEY',         'fB.yNN[3oZueUY1<Hk@kq]ls)Qf?tVs6,#_~zg+=Nhy) LKk Nev>)N:fp +84cp' );
define( 'SECURE_AUTH_KEY',  '6_!I*fdS)XnTx4`.7A>j(Mgp.@PD2l?> BPrFG%uDN=lUe3D=W}R7%CxO-$mld^7' );
define( 'LOGGED_IN_KEY',    'sFg[?9.w0*GIvW#X.Bo?]zUU~~ESUG3Lc:|&,3rp0ZV%VFw-lIQoY_8v/-UI}Ri}' );
define( 'NONCE_KEY',        'KY2.eYA.Z8>>z|w |S:g~& $E]f82]T(R#$tb{*w5ROlR=]fwk|uA[*<Ry&WD(E9' );
define( 'AUTH_SALT',        'U8_rc<lTDK)l|1HooWN).s5ryy],i%wGV)fqG7_DohkrM>~G6n/D[=*2DmQejD{/' );
define( 'SECURE_AUTH_SALT', 'r5LYLOQ1(#e}Lc$H<7u;R%ew1_c,u8o$5YoExV7^ePliPwY:>2_C#*MR.vo_Onjt' );
define( 'LOGGED_IN_SALT',   'd*DQ)OOgFoC79IL`I=KqlfUr=^Lf%m0FY/}g8ud|[vs~=tL-S=0#)SW(<%#<GRuX' );
define( 'NONCE_SALT',       'uI(oHk|SkvV5,x?^OEsAGm9$<Rwd$2G})9eh@1-If=ZKmh-k0kD?ojY5+2Is-#Az' );

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
