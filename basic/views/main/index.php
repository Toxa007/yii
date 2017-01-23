<?php
/* -- widgets
use app\components\FirstWidget;
use app\components\SecondWidget;
use yii\bootstrap\Modal;
use yii\jui\DatePicker;

<?= FirstWidget::widget([
    'a' => 33,
    'b' => 67,
]); ?>

<?php SecondWidget::begin() ?>
This will be RED
<?php SecondWidget::end() ?>

<?php
Modal::begin([
    'header' => '<h2> Hello wolrd</h2>',
    'toggleButton' => ['label' => 'press'],
]);
echo 'content of modal window';
Modal::end();
?>
<br>
<?php
echo DatePicker::widget([
'attribute' => 'from_date',
//'language' => 'ru',
//'dateFormat' => 'yyyy-MM-dd',
]);

?>
*/

/* @var $this yii\web\View */
//$this->registerJsFile('@web/js/main-index.js', ['position' => $this::POS_HEAD, 'main-index']);
//$this->registerJs('alert("Ololo")', $this::POS_READY, 'hello-messge');
//$this->registerCssFile('@web/css/main.css');
//$this->registerCss("body { background: #ff0; }");
?>
<h1>main/index</h1>
<p>
    <?= $hello ?>
</p>

