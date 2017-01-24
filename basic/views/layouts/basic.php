<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use app\components\AlertWidget;

AppAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?=Yii::$app->charset ?>">
    <?php $this->registerMetaTag(['name'=>'viewport', 'content'=> 'width=devide-width, initial-scale=1']); ?>
    <title><?=Yii::$app->name ?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap">
    <?php
    NavBar::begin(
        [
            'brandLabel' => 'TestApp',
            'renderInnerContainer' => true,
            'innerContainerOptions' => [
                'class' => 'container'
            ],
            'brandUrl' => ['main/index'],
            'brandOptions' => [
                'class' => 'navbar-brand'
            ]
        ]
    );
    ActiveForm::begin([
       'action' => ['/search'],
        'method' => 'get',
        'options' => ['class' => 'navbar-form navbar-right'],
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

    echo Nav::widget([
        'items' => [
            [
                'label' => 'Main <span class="glyphicon glyphicon-home"></span>',
                'url' => ['main/index'],
            ],
            [
                'label' => 'From box <span class="glyphicon glyphicon-inbox"></span>',
                'items' => [
                    '<li class="dropdown-header">Extensions</li>',
                    '<li class="divider"></li>',
                    [
                        'label' => 'Widgets show',
                        'url' => ['widget-test/index'],

                    ]
                ]
            ],
            '<li>
                <a data-toggle="modal" data-target="#modal" style="cursor:pointer">About <span class="glyphicon glyphicon-question-sign"></span>
                </a>
            </li>',

        ],
        'encodeLabels' => false,
        'options' => [
            'class' => 'navbar-nav navbar-right'
        ]
    ]);

    Modal::begin([
       'header' => '<h2>About</h2>',
       'id' => 'modal'
    ]);
    echo "ololo ololo ololo";
    Modal::end();

    NavBar::end();
    ?>
    <div class="container">
        <?= AlertWidget::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <span class="badge">
              <span class="glyphicon glyphicon-copyright-mark"></span> Toxa <?= date("Y") ?>
        </span>
    </div>
</footer>
<?php $this->endBody(); ?>
</body>
</html>
<?php
$this->endPage();