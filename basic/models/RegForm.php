<?php
/**
 * Created by PhpStorm.
 * User: yachmenev
 * Date: 25.01.2017
 * Time: 11:37
 */
namespace app\models;

use yii\base\Model;
use Yii;

class RegForm extends Model
{
    public  $username;
    public $email;
    public $password;
    public $status;

    public function rules()
    {
        return [
            [['username','email','password'], 'filter', 'filter' => 'trim'],
            [['username','email','password'], 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['password', 'string', 'min' => 6, 'max' => 255],
            ['username', 'unique',
                'targetClass' => User::className(),
                'message' => 'This login already exists'
            ],
            ['email', 'email'],
            ['email', 'unique',
                'targetClass' => User::className(),
                'message' => 'This email already exists'
            ],
            ['status', 'default',
                'value' => User::STATUS_ACTIVE, 'on' => 'default'
            ],
            ['status', 'in', 'range' =>[
                    User::STATUS_NOT_ACTIVE,
                    User::STATUS_ACTIVE
                ]
            ]

        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Login',
            'email' => 'E-mail',
            'password' => 'Password'
        ];
    }

    public function reg()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = $this->status;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save()?$user:null;
    }
}