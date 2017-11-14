<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ibuupl_wp13');

/** MySQL database username */
define('DB_USER', 'ibuupl_wp13');

/** MySQL database password */
define('DB_PASSWORD', 'o6PZ6BVI');

/** MySQL hostname */
define('DB_HOST', 'sql.s15.vdl.pl');

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
define('AUTH_KEY',         'rnl3WpWNrunWvoAS5KCpjgt6oOuKkDEXTvdEUSsT9TWvQyHRskAdSvFi893QhG4F');
define('SECURE_AUTH_KEY',  'lxtkA7djSWHhYdvri6RqxsUuz61XkTWeBN1FNp1VPzO4znC4NunU2ogSM4Be9QNM');
define('LOGGED_IN_KEY',    'YNSsTUPmuqrmFFlOHsurnMZ3fxOLVjFKuK45CGYET58EsEF2FAUrvEjke97BLaRd');
define('NONCE_KEY',        'To6tFd8hOBbE48BmrSGRH8MIax0253DEymbxd5f0pS01u2wrLiV4g2AGKw0fST52');
define('AUTH_SALT',        'a0iXtVtNN76VXXfExSWlZU73JPavwBL6SagbTIw8gujQ6n2afOAY0eojwpsBnq5I');
define('SECURE_AUTH_SALT', 'xH5QpFHH8IbBMnxWu2cmRXsUyW1FyGayUwINxhit1Xu1z4d4t54a0vKHTZFbaTyc');
define('LOGGED_IN_SALT',   't60JY26i277vdxBpKopgNWJbRgUwDhoKk9BABW3QW7bvtSp0BlAalUy5RUdib6Rt');
define('NONCE_SALT',       'OaPelhpqo8z31lmZtGxbxHy0VSQzqdjON0US1MF9RIUsgIpXLUETeAURRLCLG9Mp');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
