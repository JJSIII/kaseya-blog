<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kaseya-blog-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '62c{^dJL_?OG}ag?)5RrfnZ{]%{A%?8A]46VibKt?KT}e8R|dy{Zl=G`LJ;Qb]~+');
define('SECURE_AUTH_KEY',  '|||,ERd6Kz%,n(rthg8jgJud#MxfT]U1`w`K5)iy}`A>ywZV~{r_N*f.3.rLl-uI');
define('LOGGED_IN_KEY',    '6(jLG]=^W0&yTPzam^{g?0vM>vd-Rg T|V,~}zZDb/|8[ZW~[g1(5MkEDtn6V&(u');
define('NONCE_KEY',        'E=W8eb8d3mLh,fCtDQ6>>T&~9_o1;T 9Pr+tw>|(-ieAc3hl&``#/=|an%yo^z>s');
define('AUTH_SALT',        's(-2kvdF,r|B9(Vh-g|r(!,mtj,6${iUEVeY=!KPH7r~X^w1<BaR/Cc+[AqN+8y|');
define('SECURE_AUTH_SALT', ' K@3oY|>34RyS)4iAKyUGZ)W0+F-|+PTo`}A}ot*UuOl,e>DZVDWR$m2dw<FSyeE');
define('LOGGED_IN_SALT',   '4L|yzXTsMW8OWm;TA/}!%#Gz1B}P(I~[GlR$a3{+&A`+S,EbPA[T#QQX?~X3mScC');
define('NONCE_SALT',       'v9=$^s^GSksWq9Udn<#nX(=%h07kogQjz^(#53jayNj}R+<!|;T}[(Q>|fD>6qy,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
