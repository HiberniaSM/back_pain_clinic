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
define('DB_NAME', 'back_pain_clinic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DUI>*X]!{2cU50Sc,I=EHND ShB <=>AG4Xo3DcdolU^74IOE 4y%7D!y|sf?4]:');
define('SECURE_AUTH_KEY',  'us^UYQpy4o8D/3J?xl{TMbnUK{Fu_(pNbs%>P=p}[(2)i]o-igY|f|jp&])G{AGH');
define('LOGGED_IN_KEY',    '~Z)/,j5swE4m?V+Xi  UW8l*$TCF~ 0<>>Vj2FR-:cr.Mdc|Y:A6|NjWE)>N`.v`');
define('NONCE_KEY',        'D;lZP@}B:U@SI=n5LLca:m`s}4F2/A37y~[u44]:N3(8tgj{|h5PQ4KoJbi(@5CT');
define('AUTH_SALT',        'E4ohK[[T?o<E 4Bfg@8=7#]f8a0Y@f.6p&at(`=XIB`%P?>:f^lS)6Vp#&u88MY`');
define('SECURE_AUTH_SALT', 'pogLX}d#k(rIBDbrumdXTJ?kmCjmBp)N@F$muxJ6!M*n{S+[@a0dl&sgfDO>VKNQ');
define('LOGGED_IN_SALT',   '<;[U0p8Oz2i)(}_N5@y9;nb7uU3xYlW&) Z@ tS#Jg`hUr} &(K%:bNSI)<}24mk');
define('NONCE_SALT',       '5+7J2bo[,9c~t>~akg.H&9{G2s v,dg9Rej^Ql%Q-fG,7F_ag3mL$s@4?[p$<D~y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
