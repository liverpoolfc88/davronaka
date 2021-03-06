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
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Yii::$app->controller->renderPartial("//layouts/headeradmin") ?>
<!--<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
<div  class="container  item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a(Yii::t('app', 'Menu qo`shish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
                'template' => '{view}  {update}  {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('', $url,
                            [

                                'class' => 'fas fa-eye create'
                            ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('', $url,
                            [

                                'class' => 'fas fa-pencil-alt '
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

</div>
<style>
    #w0 {
        overflow-x: auto;
    }
</style>