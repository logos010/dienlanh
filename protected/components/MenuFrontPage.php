<?php

class MenuFrontPage extends CWidget{
    public $menuCate = null;
    
    public function run(){
        $criteria = new CDbCriteria();
        $criteria->condition = "status = 1 AND type_id = 1 AND parent_id = 0";
        $criteria->order = "weight";        
        $menu = Menu::model()->findAll($criteria);
        
        //news menu
        $criteria = new CDbCriteria();
        $criteria->condition = "status = 1 AND type_id = 1";
        $criteria->addCondition("id > 20 and parent_id = 0", "AND");
        $criteria->order = "weight";
        $news = Menu::model()->findAll($criteria);

        $this->render('Menu', array(
           'menu' => $menu,
           'menuCate' => $this->menuCate,
        ));
    }
}