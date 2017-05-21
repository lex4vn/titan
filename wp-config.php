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
define('DB_NAME', 'titan');

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
define('AUTH_KEY',         'G1 8|xQhL_a?*C+dHV.6?)Qd96.LU?,z~XxDw>(%}$ga8{C`pu_PftGZFsDoEI}U');
define('SECURE_AUTH_KEY',  'nR4+4VmBx%-?3I$Z`?7(jtkk002+K#9,?#BS&_=6S3=r3tWEhNBV3eS*W2u2L$7Y');
define('LOGGED_IN_KEY',    'iOo}e|Z_ PYNnFMp{QFN>J%.,~0*nx{#{PfkJtKXL8gAcWnr5@vC4>%2X)S9g,w+');
define('NONCE_KEY',        '4m97!^uWyyWZLg.sFzi6{EntxzQSKO=KsdWKSlB^Kor(fcDqL~c[*EN+fQ?Wa3ni');
define('AUTH_SALT',        'UZy)^SAlk$zil:m!sa)HK)2{@dXNB5o!:pd0yY,y?ZrW$>!!z?%4r=/)2]!asEF,');
define('SECURE_AUTH_SALT', 'OAW^XdPgH6V7!9M.#XTe#iT:aS:Zm{l? vrl*dzzo]+aQN(a1o/R{P+iA&y[soKB');
define('LOGGED_IN_SALT',   ')3Ydh{2Rd/VJ)kG>Q.d]bL.&2>,W0t[/HN;7MwH{~oLDx61$a&},%`syY1io^Yy;');
define('NONCE_SALT',       'g}j2jEhy<Bvbp^8[k-:o{Sw?X.kv@-Ss;]z#|6TQ;j8_-$6{2-..0ghFBm`cg&O>');

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
