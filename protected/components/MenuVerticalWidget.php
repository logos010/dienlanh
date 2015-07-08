<?php

/**
 * Description of Menu
 *
 * @author LangVan
 */
class MenuVerticalWidget extends CWidget {
    public $menuCate = null;
    
    public function run() {
        $criteria = new CDbCriteria();
        $criteria->condition = "status = 1 AND type_id = 1 AND parent_id = 0";
        $criteria->order = "weight";
        $menu = Menu::model()->findAll($criteria);

        $this->render('MenuVertical', array(
            'menu' => $menu,
            'menuCate' => $this->menuCate,
        ));
    }

}

?>