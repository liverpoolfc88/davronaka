<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Menu;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_id')->dropDownList(ArrayHelper::map(Menu::find()->all(), 'id', 'name'),['prompt' => 'Menuni tanlang'])?>

    <?= $form->field($model, 'names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prices')->textInput() ?>

    <?=
    $form->field($model, 'special')->dropDownList([
    '0' => 'Oddiy',
    '1' => 'Maxsus',
    ]);
    ?>

    <?= $form->field($model, 'sales')->textInput() ?>

    <?= $form->field($model, 'photo')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
