<?php
/*
 * @author quyetnd
 */

/* * * error reporting on ** */
error_reporting(E_ALL);

/* * * define the site path ** */
define('__SITE_PATH', realpath(dirname(__FILE__)));

define('APPLICATION_PATH', __SITE_PATH . '/application');

try {
    require APPLICATION_PATH . '/bootstrap.php';
} catch (Exception $exception) {
    /**/
    echo '<html><body><center>'
    . 'An exception occured while bootstrapping the application.';
    //if (defined('APP_ENV') && APP_ENV != 'production') {
    echo '<br /><br />' . $exception->getMessage() . '<br />'
    . '<div align="left">Stack Trace:'
    . '<pre>' . $exception->getTraceAsString() . '</pre></div>';
    //}
    echo '</center></body></html>';
    exit(1);
    /**/
}
?>
