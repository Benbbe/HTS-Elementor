<?php

define('WP_CACHE', true);
define( 'WPCACHEHOME', '/homepages/3/d710294036/htdocs/clickandbuilds/HairTransplantParis/wp-content/plugins/wp-super-cache/' );
define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db814225823' );

/** MySQL database username */
define( 'DB_USER', 'dbo814225823' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZnxKfGVoyvOWzgclhooe' );

/** MySQL hostname */
define( 'DB_HOST', 'db814225823.hosting-data.io' );

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
define( 'AUTH_KEY',          '4H/(/Z-Z_*C@Hw)#6Y<>^7qXSUcr!0dxOt=sQdP1/3wd-IguR?%Ah9b?v5zxl!++' );
define( 'SECURE_AUTH_KEY',   'Hw}sL}Fce0@U`#/N|8ifn,vcn24a(l:bpDjN}>ZV[e  a.2BmKN6[9-iX>x&B]v0' );
define( 'LOGGED_IN_KEY',     'WN}O14{>bJq6TDTH!St7aGB=/2~*c$0:>5ZYS3CB.|BIlh@UDY%H Wk5I:)yQ?DI' );
define( 'NONCE_KEY',         'x9bH|-V%{/zOth0YA yoZu :1_?6Sk,n;ow!BlEXQob6+ Mr]bA41pjq)El=8boQ' );
define( 'AUTH_SALT',         ',NILugx_6il#3eIQjmQ~<!C_!yF^,e@~#x9Y=B%AJ-5yphUgg-@3w}i8)mOv)o!t' );
define( 'SECURE_AUTH_SALT',  'peTw@K1^GUvL`~1*WT.u%2N@-6Bz7g8rP/lA_.5b3{sVvdYFM(oiwP!QjJFwda?S' );
define( 'LOGGED_IN_SALT',    'p>w|;,nDM@SbW^`SQVRMM. }b;1guM_^bDMl6-LHA%kr4R5MYXoX|nHc5uDAOCm>' );
define( 'NONCE_SALT',        'JWmgL15:y4FYN#3yk%a!N?15]@xS8^1WatkvneReV}}+P4?+W}0;X]IMy3k&6]qg' );
define( 'WP_CACHE_KEY_SALT', 'o=@%=N6t:y_0OJ<#Fv|LJ` 6yc!XE96 PWO3SfBZ+oCqa0_K?q*MYzNedzI]52:Z' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PUuojnIp';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
