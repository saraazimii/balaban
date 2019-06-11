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
define( 'DB_NAME', 'travel' );

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
define( 'AUTH_KEY',         'pCbq[@2,:$iulmkQFk4n?}F47$v0Obrk^BwAES=TMWvQt(KE#t$BbR>D8rJ2Qkk~' );
define( 'SECURE_AUTH_KEY',  'MeKyH7mj vG4V @{sy#zfm-9R-2gtJP*Xg*sqnA+&y`q/NVu!N@tG^!6w;`Ws;xD' );
define( 'LOGGED_IN_KEY',    'l&u8orC2W% S0.,(K1TEW BcCk57S;$,W(suD6cAiJt*(]_#EO@pdu)TrjhR<5L%' );
define( 'NONCE_KEY',        ':8yMR`Up(<GWjJi~ZrG[}`B&gB|O^UTqnC|`UGh`y7~ !&*{T6p2-UE,FJ?ehny)' );
define( 'AUTH_SALT',        '5mf[|C9HnMewkn{t,3P# k>-{eeoK@`vd@?8NL#a[X]h:J=UjQz6]Cn%V}-uh+0d' );
define( 'SECURE_AUTH_SALT', '?(j;dq_1Scv)Tw,j@d7f=VoS}#c09V1h<yTP*ps&U,pVA<,WqyB2K.~M&n*Ye?;c' );
define( 'LOGGED_IN_SALT',   'e:|%^Sha&-ZIeeOxJ!J$HKdBpRbW~bDa{p>(m&jH*bAOpxuy12@ K8K}&~VBNo:)' );
define( 'NONCE_SALT',       'KI08U,J1ZgDL%GJ-4EJhd..``#)w?WDn[p%|r#I&6eUg#Z<M/xSBDnbDu!V|Ro.|' );

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
