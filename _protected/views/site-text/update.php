<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SiteText */

//$this->title = 'Update Site Text: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Site Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?=Yii::$app->controller->renderPartial("//layouts/headeradmin")?>
<div class="container site-text-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
