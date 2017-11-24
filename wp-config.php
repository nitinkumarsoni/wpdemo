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
define('DB_NAME', 'wordpress');

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

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ' ^cNDN*Gh|!|v7]5L);U+jg6TZhT|S~Y#Nk;r[/>w6VQ^^mAX9ud?tk7(bMFAx6@');
define('SECURE_AUTH_KEY', 'ogv<dPI[:/[;^g%WwcQh%WbO`i*lHIY<X1#}BRg/iwag$tJz%eTk[hg{[{gr%tLr');
define('LOGGED_IN_KEY', '7y/tUE-C!9EbMn&JTc$^=d95)k$_(@NQV#&^#NW35W3!OojuXehY!mZd#b` a4[&');
define('NONCE_KEY', ':2rZ9S~x5)`aK_]y{Uv@}e<)T+=#rERe=,VCh>L+Fw9}%%kQ}}k>iIdA~=W0~q?K');
define('AUTH_SALT', 'w`r?{(5TFp#<Ep/5e&Qs]* 5,1c7neTWx)t3B|A`FDi<*[ER]W9MeH:7=RhPh3!!');
define('SECURE_AUTH_SALT', 'jF~X 4A{X?#p*~qY~e<I7.,qvJ0SWA1p>$07089I)s@!.Rtd^T!YU!~%k[&ZU9qV');
define('LOGGED_IN_SALT', '-sB:{.X&6XHaew1/v#V@iz]/C><U!Hc2h:^FnI1&;k]*4auH$N.)[=tYml=n*piN');
define('NONCE_SALT', '@./u3u{c^I;z+&loH?/r?eSS|J&B,NPb53rmWOKPwN$_*Hf%jo&C;0tfw^|GtO),');

/* * #@- */

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
