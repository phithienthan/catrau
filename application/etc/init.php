<?php
/*
 * @author quyetnd
 */
/*set session timeout*/    
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

require_once('mvc_core.class.php');
require_once('MySQL.class.php');

/* * * include the controller class ** */
require_once('controller_base.class.php');

/* * * include the view class ** */
require_once('view_base.class.php');

/* * * include the model class ** */
require_once('model_base.class.php');

/* * * include the block class ** */
require_once('block_base.class.php');

/* * * include the registry class ** */
require_once('registry.class.php');

/* * * include the router class ** */
require_once('router.class.php');

require_once('auth.class.php');
require_once('request.class.php');
require_once('admin_controller_base.class.php');
require_once('default_controller_base.class.php');
require_once('helper.class.php');
require_once('grid.class.php');
/* plugin open source */
require_once('resize.class.php');
/* fckeditor */
require_once('fckeditor/fckeditor.php');
/* plugin detect mobile */
require_once('mobile_detect/mobile_detect.php');


/* * * a new registry object ** */
$registry = new registry;
?>