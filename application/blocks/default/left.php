<?php
/*
 * @author quyetnd
 */

class default_block_left Extends baseBlock{    
    public function init(){
        $requestPath = $this->request->getRequestPath();        
        $categoryModel = $this->model->get('category');
        $parentCategorys = $categoryModel->getCategoryByParentId(0);
        $menuHtml = "";
        if(count($parentCategorys)>0){
            $menuHtml = "<table border=\"0\" cellpadding=0 cellspacing=0 width=\"100%\" height=100%><tr class=\"menu\">";
            foreach($parentCategorys as $parentCategory){                  
                $menuHtml .= "<td><a href=\"/".$parentCategory['url_key']."/\">".$parentCategory['title']."</a></td><td width=1><img src=images/bg-menu-line.gif></td>";
            }
            $menuHtml .= "</tr></table>";
        }  
        $this->data['menuHtml'] = $menuHtml;
        //hotline
        $contactModel = $this->model->get('contact');
        $contactInfo = $contactModel->getContactInfo(1);
        $this->data['hotline'] = $contactInfo['hotline'];
    }
}

?>