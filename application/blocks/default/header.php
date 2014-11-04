<?php
/*
 * @author quyetnd
 */

class default_block_header Extends baseBlock{    
    public function init(){
        $requestPath = $this->request->getRequestPath();        
        $categoryModel = $this->model->get('category');
        $parentCategorys = $categoryModel->getCategoryByParentId(0);
        $menuHtml = "";
        if(count($parentCategorys)>0){
            $menuHtml = "<ul>";
            foreach($parentCategorys as $parentCategory){  
                if($requestPath != "/".$parentCategory['url_key']){
                    $menuHtml .= "<li><a href=\"/".$parentCategory['url_key']."/\">".$parentCategory['title']."</a>";
                } else {
                    $menuHtml .= "<li class=\"active\"><a href=\"/".$parentCategory['url_key']."/\">".$parentCategory['title']."</a>";
                }
                $categoryChildren = $categoryModel->getCategoryByParentId($parentCategory['id']);
                if(count($categoryChildren)>0){
                    $menuHtml .= "<ul>";                
                    foreach($categoryChildren as $categoryChild){  
                            $menuHtml .= "<li><a href=\"/".$categoryChild['url_key']."/\">".$categoryChild['title']."</a>";                    
                    }  
                    $menuHtml .= "</ul>";
                }
                $menuHtml .= "</li>";
                
            }
            $menuHtml .= "</ul>";
        }
        $this->data['menuHtml'] = $menuHtml;
        //hotline
        $contactModel = $this->model->get('contact');
        $contactInfo = $contactModel->getContactInfo(1);
        $this->data['hotline'] = $contactInfo['hotline'];
    }
}

?>