<?php

/*
 * @author quyetnd
 */

/**
 * Database config
 */
define('DB_HOST', '127.0.0.1'); // IP host
define('DB_USER', 'root'); // User database
define('DB_PASS', '123456'); // Password database
define('DB_NAME', 'catrau_db'); // Database name

/**
 * Auto redirect to this url when mobile detected
 */
define('MOBILE_URL', 'http://catrautienvua.com.vn/');

/**
 * Default for SEO
 */
define('DEFAULT_TITLE', 'Ca trau tien vua dac san Ninh Binh');
define('DEFAULT_DESCRIPTION', 'Ca trau, Ca trau tien vua dac san Ninh Binh');
define('DEFAULT_KEYWORDS', 'Ca trau tien vua dac san Ninh Binh');

/**
 * define common path
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('APP_PATH', ROOT . DS . 'app' . DS);
define('CONFIG', ROOT . DS . 'config' . DS);
define('LIB_PATH', ROOT . DS . 'config' . DS);
define('SKIN_PATH', '/skin/');
define('AVATAR_PATH', '/uploads/image/avatar/');
define('AVATAR_RESIZE_PATH', '/uploads/image/avatar/resize/');

?>