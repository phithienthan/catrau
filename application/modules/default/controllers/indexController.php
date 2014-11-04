<?php
/*
 * @author quyetnd
 */

Class indexController Extends defaultController {

    public function indexAction() {
        die;
        $this->view->setTitle("Nhom Xingfa, Cua so Xingfa, xingfawindow, xingfawindow.vn");
        $this->view->setDescription("Nhom Xingfa, Cua so Xingfa, xingfawindow, xingfawindow.vn");
        $this->view->setKeywords("Nhom Xingfa, Cua so Xingfa, xingfawindow, xingfawindow.vn");
        
        $productModel = $this->model->get('product');
        $products = $productModel->getHotProducts(6,1);                
        $this->view->data['products'] = $products;
        
        $this->view->show('index');
        /* load layout template */        
    }

}

?>