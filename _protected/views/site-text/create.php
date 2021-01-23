<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SiteText */

$this->title = 'Create Site Text';
$this->params['breadcrumbs'][] = ['label' => 'Site Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?=Yii::$app->controller->renderPartial("//layouts/headeradmin")?>
<div class="container site-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
