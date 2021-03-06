<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiteText */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'create_at')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'update_at')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
