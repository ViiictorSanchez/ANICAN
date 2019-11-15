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
define( 'DB_NAME', 'anican' );

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
define( 'AUTH_KEY',         '2TUgACcer^TuLx(jx>J3V@OlD!dBE*i1Waphu/:WDqJ))IRD{;3lP`qCIok>`d0l' );
define( 'SECURE_AUTH_KEY',  '4q^f/ro+c|iiHYyRwYnj)2#ZyL-IM5`|?AKB9%@(C5a1$`g}Ui|~h=K@fvC_mIS0' );
define( 'LOGGED_IN_KEY',    '>NOSke4Im9N]e<SAF.L&5(RJK}kzjwoCt4f*W~S% K}`APyB,hB~:5=(&~|jBs8r' );
define( 'NONCE_KEY',        'D#bG^nq/~@TnU!6r;sTKVho^Jmx&l/Ah-700@kZOU6r*EnQ._,.h:{T:4q:U}7n6' );
define( 'AUTH_SALT',        '4Z~@Sx?1jSe%G#hTvw#op~8[>EX/%).b(MYo6Tfqe*p{I(0,/f GtQ~`H+()3vcP' );
define( 'SECURE_AUTH_SALT', '-hFYBw8,#!)zc/!7j3U~J+r:MCbUleYNRsH9?T!u0d|b%lUkp1XmN.WOFvKM.o~s' );
define( 'LOGGED_IN_SALT',   'A`0]HFH<#sr`/Qv#jwjdt?( b-_#9wkk%lc0~:W2z8`EF@>_7DQ*U#,pDeKsVM|u' );
define( 'NONCE_SALT',       'AL%2j@QbIQQ7ml<FPJlL>Lxp+),j|Be({qsM<br.|GqEy-HI9WGErynNu?Ji;_uc' );

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
