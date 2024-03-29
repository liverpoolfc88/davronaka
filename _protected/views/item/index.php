<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\models\Menu;
use kartik\export\ExportMenu ;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Maxsulot');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Yii::$app->controller->renderPartial("//layouts/headeradmin") ?>
<div class=" container item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Maxsulot qo`shish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?
    $gridColumns = [
        [ 'class' => 'yii\grid\SerialColumn' ],
        'id' ,
        'names' ,
        'prices' ,
        'menu_id' ,
        'created_at' ,
        [ 'class' => 'yii\grid\ActionColumn' ],
    ];
    echo ExportMenu :: widget ([
     'dataProvider' => $dataProvider ,
     'columns' => $gridColumns
]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
//            'photo',
            [

                'attribute' => 'photo',

                'format' => 'html',

                'label' => 'Rasmi',

                'value' => function ($data) {

                    return Html::img('/' . $data['photo'],

                        ['width' => '150px']
                    );

                },

            ],
//            'names',
//            'prices',
//            'special',
//            'text',
//            'sales',
            [
                'attribute' => 'names',
                'value' => 'names',
                'headerOptions' => ['style' => 'text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'text-align: center;vertical-align: middle;'],
            ],
            [
                'attribute' => 'prices',
                'value' => 'prices',
                'headerOptions' => ['style' => 'text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'text-align: center;vertical-align: middle;'],
            ],
            [
                'attribute' => 'special',
                'value' => function($model){
                return ($model->special == 0)? 'Oddiy':'Maxsus';
                },
//                'value' => 'special',
                'headerOptions' => ['style' => 'text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'text-align: center;vertical-align: middle;'],
            ],
            [
                'attribute' => 'text',
                'value' => 'text',
                'headerOptions' => ['style' => ' width:150px; text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'white-space: break-spaces; text-align: center;vertical-align: middle;'],
            ],
            [
                'attribute' => 'sales',
                'value' => 'sales',
                'headerOptions' => ['style' => 'text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'text-align: center;vertical-align: middle;'],
            ],
//            'views',
//            'menu.name',
            [
                'attribute' => 'menu_id',
                'value' => 'menu.name',
                'headerOptions' => ['style' => 'width:120px;text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'text-align: center;vertical-align: middle;'],
                'filter' => ArrayHelper::map(Menu::find()->all(), 'id', 'name'),

            ],
            'created_at',
//            [
//                'attribute' => 'created_at',
//                'value' => 'created_at',
//                'headerOptions' => ['style' => ' width:100px; text-align: center;vertical-align: middle;'],
//                'contentOptions'=>['style'=>'white-space: break-spaces; text-align: center;vertical-align: middle;'],
//
//            ],
            [
                'attribute' => 'updated_at',
                'value' => 'updated_at',
                'headerOptions' => ['style' => ' width:100px; text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'white-space: break-spaces; text-align: center;vertical-align: middle;'],
            ],
//            'updated_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}  {update}  {delete}',
                'headerOptions' => ['style' => 'text-align: center;vertical-align: middle;'],
                'contentOptions'=>['style'=>'text-align: center;vertical-align: middle;'],
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