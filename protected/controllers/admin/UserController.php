<?php

class UserController extends Controller
{
    public function actionIndex()
    {        
        $dataProvider = new CActiveDataProvider('User', array(
            'pagination' => array('pageSize' => 10),
        ));
        $this->render('index', array('dataProvider' => $dataProvider));
    }
    
    public function actionView($id)
    {
        $model = User::model()->findByPk($id);
        $this->render('view',array(
            'model'=>$model,
        ));
    }
}