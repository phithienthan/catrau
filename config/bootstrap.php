<?php

/*
 * @author quyetnd
 */

/* * * include the config.php file ** */
require __DIR__ . '/config.php';

/* set session timeout */
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
// Ensure lib is on include_path

set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), realpath(APP_PATH . '/../lib/sf'),)));
set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), realpath(APP_PATH . '/../lib/fckeditor'),)));
set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), realpath(APP_PATH . '/../lib/mobile_detect'),)));

/* Autoloader */

function sf_autoloader($class) {
    include $class . '.class.php';
}

spl_autoload_register('sf_autoloader');

/* detect mobile */

$detect = new MobileDetect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
switch ($deviceType) {
    case 'tablet':
        header("location:" . MOBILE_URL);
        break;
    case 'phone':
        header("location:" . MOBILE_URL);
        break;
    case 'computer':
        break;
    default:
        break;
}


/* * * a new registry object ** */
$registry = new registry;

/* * * load the router ** */
$registry->router = new router($registry);
/* * * set the path to the controllers directory ** */
$registry->router->setPath(APP_PATH);
$registry->router->loader();
?>