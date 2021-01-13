<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Menus');
$this->title = Yii::t('app', 'Menu');
//$this->params['breadcrumbs'][] = $this->title;
?>

<?= Yii::$app->controller->renderPartial("//layouts/headeradmin") ?>
<!--<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
<section style="padding-top: 50px;" class="container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 't/r'],
//            [
//                'attribute' => 'id',
//                'header' => 'ID raqami',
//            ],
            [
                'attribute' => 'name',
//                'header' => 'catalog nomi',

//                'enableSorting' => TRUE,

            ],
            [
                'attribute' => 'create_at',
//                'header' => 'Catalog qo`shilgan vaqt',
            ],
            [
                'attribute' => 'update_at',
//                'header' => 'Catalog taxrirlangan vaqt',
            ],
//            'id',
//            'name',
//            'create_at',
//            'update_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => Html::a(Yii::t('yii', 'Qo`shish'), ['create'], ['title' => 'Янги банк номини киритиш', 'class' => 'btn btn-danger bank']),
                'template' => '{view}  {update}  {delete}',

                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('', $url,
                            [
                                'title' => Yii::t('app', 'Кўриш'),
                                'class' => 'fas fa-eye bank'
                            ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<i class=\'fas fa-pencil-alt\'></i>', $url,
                            [
                                'title' => Yii::t('app', 'Тахрирлаш'),
                                'class' => 'bank'
                            ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('', ['delete', 'id' => $model->id], [
                            'class' => 'fas fa-cut',
                            'data' => [
                                'confirm' => 'Ўчириб юборилсинми?',
                                'method' => 'post',
                            ],
                        ]);
                    },

                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        return Url::to(['view', 'id' => $model->id]);
                    }
                    if ($action === 'update') {
                        return Url::to(['update', 'id' => $model->id]);
                    }

                }
            ],
        ],
    ]); ?>

</section>


<style>
    table .table-striped {
        overflow-x: auto;
        min-height: .01%;
    }
</style>


<?
Modal::begin([
    'id' => 'modal',
]);
?>
<div id="modalContent">

</div>
<?php
Modal::end();
?>
