<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u632013669_4qu31' );

/** Database username */
define( 'DB_USER', 'u632013669_WirSJ' );

/** Database password */
define( 'DB_PASSWORD', 'AhY67DLpTV' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[]BBoVWC0{&sTv{uuEv(KO>a8vt6l/c^CnU7c94J]2Reu1k|dfC`cCty`>H$}Gk/' );
define( 'SECURE_AUTH_KEY',   'ZXtjq0Za|ZT&iqX]k;5Quye6~K>*V>V#KkYMo Y].8AO^L)UUYhO%G%p;eXWy+SS' );
define( 'LOGGED_IN_KEY',     'k0h]czOtdUM{:)gaHloY123X~O)E8{BZa-+=$J#Fv9t.|#},B3$$pm xxw4/l1L2' );
define( 'NONCE_KEY',         'H_paJf5F7Y]xQALTi 3[dq{U#}!bDNO&%p06s5xX1gY,iK-7;4^aRd]^T? 0Kv!A' );
define( 'AUTH_SALT',         '^_.Ii=]p@Ktj+LCC!*1>*I>0{U_qiGfXgs)5qt?p8zlz_QQ7}Gs?;gOosST!XF$f' );
define( 'SECURE_AUTH_SALT',  '>5b_>zIY?i7/%|o|.qbgcSwPYxcD3z);cn>A2ma%dWG*Ar%HC}zYL$X&*&(sxt9f' );
define( 'LOGGED_IN_SALT',    'z@t4r|,7pid[~T-vmeBQmkD`hy++ZWhNBE**=Ax^~3iLAZ}Ba(p{Y<b{rL4XJZ7@' );
define( 'NONCE_SALT',        '[dDF:j99|8nk=flStF(]t2@Z[ln=@3kxClhj)_!%?dHUM(1mqAZW?j|FLqS)=}lF' );
define( 'WP_CACHE_KEY_SALT', 'mj(5W#Z,[4uc;5AZV@f@&u7K5J1PpjibQ~#.`jY_= UGYrmY%>~~.E86z<+pB&`N' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
