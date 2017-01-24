<?php

namespace app\controllers;

use Yii;

class MainController extends \yii\web\Controller
{
    //public $layout = 'basic';
    //public $defaultAction = 'index';

    public function actionIndex()
    {
        $hello = 'Ololo';
        return $this->render('index',
            [
                'hello' => $hello,
            ]
            );
    }

    public function actionSearch($search = null)
    {
        if($search){
            Yii::$app->session->setFlash(
                'success',
                'Search result'
            );
        }
        else{
            Yii::$app->session->setFlash(
                'error',
                'Search form not filled'
            );
        }
        return $this->render('search',
            [
                'search' => $search,
            ]
        );
    }

}
