<?php
/*
 * @author quyetnd
 */

session_start();
// Ensure lib is on include_path
set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), realpath(APPLICATION_PATH . '/../lib/sf'),)));
set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), realpath(APPLICATION_PATH . '/../lib'),)));

/* * * include the config.php file ** */
require_once('etc/config.php');

/* * * include the init.php file ** */
require_once('etc/init.php');

/* detect mobile */
/*
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
switch($deviceType){
    case 'tablet':
        header("location:".MOBILE_URL);
        break;
    case 'phone':
        header("location:".MOBILE_URL);
        break;
    case 'computer':
        break;
    default:
        break;
}
*/
/* * * load the router ** */
$registry->router = new router($registry);
/* * * set the path to the controllers directory ** */
$registry->router->setPath(APPLICATION_PATH);
$registry->router->loader();

?>