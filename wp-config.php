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
define( 'DB_NAME', 'tvtrung_db_wp' );

/** MySQL database username */
define( 'DB_USER', 'tvtrung__user_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
define( 'DB_HOST', 'johnny.heliohost.org' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '27HDm}`1&$*VFqVT@)vhE1@VKg_9jF$ZebT5Yi<cI,P$<^x>7`YnZ{_i^{s_}#$9' );
define( 'SECURE_AUTH_KEY',  'RFTGi[&@cq?&>jlFRj`ajW1sbLoWyq}R+od|BF*s2bCz<WW`8tLt<qkFZ /cjATg' );
define( 'LOGGED_IN_KEY',    '+m:5Y$d.3X#)J<#lKogaT<ZE_=Dj)*d/_.@t7(I}Ob@Rl4/SN4P[Z-M93K`KGxxZ' );
define( 'NONCE_KEY',        'Lf!;YuBQH/a -Uf.<$LPsmr -sS}=irj2/<GH*APxkcUR+K{_M_hO)L3S{B$Xcx(' );
define( 'AUTH_SALT',        'D.Xo`c3e4d #uX&m*ae}F5h}td/3 |Wa2?7A!F;uuiFk=^:_+tm1-5&H(4Pv4R]R' );
define( 'SECURE_AUTH_SALT', '5<DQt,tVB?-5H>,x6oD6ZZ6Z6NZ=TT%cx`!w`H&bd6&$7blb/eDL<6y;;]+mEJ.M' );
define( 'LOGGED_IN_SALT',   'CZ8a)[b+Z<PWy6%(?fqZR[zVF4g$Uifd5i=FyQ@5xKYc34^!GDM0U(q8n5b7+aWT' );
define( 'NONCE_SALT',       '=Jsn!v-QD_Kh#=[-Ll`MYTN#h0LEZ~coR?v^.^:RL]knuPURYqFa;{H6Qy28Ai]G' );

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
