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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id6281363_wp_509ffbdcf3b2d3172ac2c0ebff8e9a34' );

/** MySQL database username */
define( 'DB_USER', 'id6281363_wp_509ffbdcf3b2d3172ac2c0ebff8e9a34' );

/** MySQL database password */
define( 'DB_PASSWORD', '9cf5437c2baa57495cb9be6c531b3f5a15a41d92' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qs7p2c.TswcxRwSl|9aS0{LrTN2i3eFIEy*G~9F6%T^fFA{i`sK{Q/h+Ry^|5)7V');
define('SECURE_AUTH_KEY',  '}oj|p}kNeqCW9&b.V:;zyD?b.>n.::tzrf-q5M/ng8!1#:4=V3Z)JX]Wggb*(c!;');
define('LOGGED_IN_KEY',    'idusArT?I@FA<d:hH)w5?jDkJyCcHF@$7#M{Z3u[v+Kola6H5[Wf%x^(+5D`4@+m');
define('NONCE_KEY',        ';}H12.#@v-PI/I&jJYGF{pjLQHg<:0nx-`5hopAFbN)qwx3-4OC|4LJP$6{Z[V[a');
define('AUTH_SALT',        '2N@4pm^V80prX(%5  vO:U-Y</wZ#UBQ!N.v~PZEF#4V3U KQ9tBB]-]4%m6aI$V');
define('SECURE_AUTH_SALT', 'lcbNZ_#GZ@)Pj*(|xlG~;#*i^zAW;-I}(Xz}o)A+Rar]U8{t#kexgY4gl3e#,yg`');
define('LOGGED_IN_SALT',   '1;_f2)l9d6&Ttzr@vwhsG? |-NN!X^iE{,c+AGq13igfgZW1Q$$;`X2_$pFqC12I');
define('NONCE_SALT',       '7Yx.#Qbic;e91X9ZtYOV#.UwN0TYg,<p4TlQgyf#=8=-jJ1?^+{ChG4/#+>B@K<n');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
