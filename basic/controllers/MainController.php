<?php

namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\LoginForm;
use app\models\User;

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

    public function actionReg()
    {
        $model = new RegForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($user = $model->reg()){
                if($user->status == User::STATUS_ACTIVE)
                    if(Yii::$app->getUser()->login($user))
                        return $this->goHome();
            }
            else{
                Yii::$app->session->setFlash('error', 'Registration error');
                Yii::error('Registration error');
                return $this->refresh();
            }
        }

        return $this->render(
            'reg',
            ['model' => $model]
        );
    }

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
            return $this->goHome();

        $model = new LoginForm();

        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->goBack();
        }

        return $this->render(
            'login',
            ['model' => $model]
        );
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['/main/index']);
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
