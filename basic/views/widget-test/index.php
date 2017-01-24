<?php
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

echo Html::a(
   'Modal window',
    ['#'],
    [
        'data-toggle' => 'modal',
        'data-target' => '#search',
        'class' => 'btn btn-warning'
    ]
);

Modal::begin([
    'options' => [
        'id' => 'search'
    ],
   'size' => 'modal-lg',
    'header' => '<h2> Header </h2>',
    'footer' => 'window footer'

]);

ActiveForm::begin([
    'action' => ['/search'],
    'method' => 'get',
]);
echo '<div class="input-group input-group-sm">';
echo Html::input(
    'type:text',
    'search',
    '',
    [
        'placeholder' => 'Search ...',
        'class' => 'form-control'
    ]
);
echo '<span class="input-group-btn">';
echo Html::submitButton(
    '<span class="glyphicon glyphicon-search"></span>',
    [
        'class' => 'btn btn-success',
        'onClick' => 'window.location.href = this.form.action + "-" + this.form.search.value.replace(/[^\w\а-яё\А-ЯЁ]+/g,"_") + ".html";'
    ]
);
echo '</span></div>';
ActiveForm::end();

Modal::end();
/*
use yii\helpers\Html;
use yii\helpers\Url;

echo Html::a(
    'Send id = 123 here',
    Url::to(['widget-test/index', 'id' => '123'])
);
if(isset($_GET['id']))
    echo '<p>'.$_GET['id'].'</p>';
echo '<br>';

echo Html::a(
    'Search docs for 2015 year',
    Url::to([
        'main/search',
        'search' => 'doc',
        'year' => '2015'
    ])
);
*/
/*
use yii\bootstrap\Nav;

echo Nav::widget([
    'activateItems' => true,
    'activateParents' => true,
    'encodeLabels' => false,
    'options' => [
      'class' => 'nav nav-pills nav-justified'
    ],
    'items' => [
        [
            'label' => 'Url 1 <span class="glyphicon glyphicon-alert"></span>',
            'url' => ['#'],
        ],
        [
            'label' => 'Url 2',
            'url' => ['widget-test/index'],
        ],
        [
            'label' => 'Dropdown list',
            'items' => [
                [
                    'label' => 'Url 1',
                    'url' => ['#'],
                ],
                '<li class="divider"></li>',
                [
                    'label' => 'Url 2',
                    'url' => ['widget-test/index']
                ]
            ]
        ]
    ]
]);
*/
?>

