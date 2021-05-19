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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         '02P9B$KfUuK;fmdaG)-&^I@bEC:fw6b^xF8}f0<!90+qghDP{,63.]Gl+rrmN 1S' );
define( 'SECURE_AUTH_KEY',  '[~D?M_,NVpW2ht0LG4j5WyRcII}N1ezs9qC~mjXhkk0w6%cnT]J3IffD]/:T7$}<' );
define( 'LOGGED_IN_KEY',    '1H|J5)Zelbic.E[Nf>Hn%?/;$Ik=u@/Mq?}CzWZEem1}k3W.fgFHCQ@1&[Q[B5}+' );
define( 'NONCE_KEY',        'o4ndH>Hts0G:D&)l;k+:T&U92vHc6L_h7Rj@dBa]B]7ByXtz,+J3Z:^5.K16&w@r' );
define( 'AUTH_SALT',        '.>GM5d-}:y}p=.6^5L.J7E1XCdKxGCR6>SjT&ITL]+MbAEW*&bY*A^62KgkH0O>j' );
define( 'SECURE_AUTH_SALT', ']tp$pv$ 0-?$Rh,7u))a GSx]N!|I0t hoNuh8uG$[DR1/rVa4.CjnTFqC.FtBI2' );
define( 'LOGGED_IN_SALT',   'S/:b_fQ7a^LjADQ U7E`j{78Dwq!Et%N3*]Km-CciguExh7~qs{[&eKHF@/+coB&' );
define( 'NONCE_SALT',       '(+E_=P_y]f(kupcr.|g.*s:IIR=Xnoc{6oK,H/+rc{3AG85tL>w*,l?`la}yB6kC' );

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
