<?php

//Yii::import('application.modules.admiin.model.*');

class SearchController extends ControllerBase {

    public function actionSearchInBasic() {
        if (isset($_REQUEST['keyword'])) {
            scriptFile(App()->theme->baseUrl . "/js/jquery.equalheights.min.js");

            $criteria = new CDbCriteria();
            $criteria->compare('name', $_REQUEST['keyword'], true);
            $criteria->compare('price', $_REQUEST, true, 'OR');
            $criteria->compare('description', $_POST['keyword'], true, 'OR');
            $criteria->compare('detail', $_POST['keyword'], true, 'OR');

            $products = Product::model()->findAll($criteria);
            $this->renderPartial('search', array(
                'prodSearch' => $products
            ));
        }
    }

}
