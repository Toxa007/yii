<?php
/**
 * Created by PhpStorm.
 * User: yachmenev
 * Date: 23.01.2017
 * Time: 17:14
 */
namespace app\components;

use yii\base\Widget;

class SecondWidget extends Widget {

    public function init(){
        parent::init();
        ob_start();

    }

    public function run()
    {
        $content = ob_get_contents();
        ob_end_clean();
        return $this->render('second',[
            'content' => $content,
        ]);

    }
}