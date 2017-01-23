<?php
/**
 * Created by PhpStorm.
 * User: yachmenev
 * Date: 23.01.2017
 * Time: 17:07
 */
namespace app\components;

use yii\base\Widget;

class FirstWidget extends Widget {
    public $a;
    public $b;

    public function init(){
        parent::init();
        if($this->a === null){
            $this->a = 0;
        }
        if($this->b === null){
            $this->b = 0;
        }
    }

    public function run()
    {
        $c = $this->a + $this->b;
        return $this->render('first',['c' => $c]);
    }
}