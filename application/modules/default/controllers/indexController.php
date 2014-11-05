<?php
/*
 * @author quyetnd
 */

Class indexController Extends defaultController {

    public function indexAction() {               
        $productModel = $this->model->get('product');
        $products = $productModel->getHotProducts(6,1);                
        $this->view->data['products'] = $products;
        
        $this->view->show('index');
        /* load layout template */        
    }

}

?>