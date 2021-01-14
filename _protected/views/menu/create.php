<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */

$this->title = Yii::t('app', 'Menu qo`shish');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<?=Yii::$app->controller->renderPartial("//layouts/headeradmin")?>
<div class="menu-create  container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
