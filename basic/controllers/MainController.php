<?php

namespace app\controllers;

use Yii;

class MainController extends \yii\web\Controller
{
    public $layout = 'basic';
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $hello = 'Ololo';
        return $this->render('index',
            [
                'hello' => $hello,
            ]
            );
    }

    public function actionSearch()
    {
        //$search = Yii::$app->request->post('search');
        $search = Yii::$app->request->get('search');
        return $this->render('search',
            [
                'search' => $search,
            ]
        );
    }

}
