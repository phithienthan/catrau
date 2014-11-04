<?php
/*
 * @author quyetnd
 */

Class defaultController Extends baseController {

    public function init() {               
        $this->view->set_layout('default_layout');       
        /* Save static visitor */
        $staticModel = $this->model->get('static');
        $curUrl = Helper::getInstance()->curPageURL();            
        $params["ip"] = $_SERVER['REMOTE_ADDR'];
        $params["time"] = date("Y-m-d H:i:s", time());
        $params["browser"] = $_SERVER['HTTP_USER_AGENT'];
        $params["url"] = $curUrl;
        /* write 5 times because revolslider jquery */
        Helper::getInstance()->WriteLog("log_" . date("Ymd", time()) . ".txt", $_SERVER['REMOTE_ADDR']);
        try{            
            $staticModel->addNewPageView($params);
        } catch(Exception $ex) {
            echo $ex;
        }
        /* end save static visitor */
    }    
    
    public function indexAction() {
        
    }

}

?>