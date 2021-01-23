<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiteTextSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Texts';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Yii::$app->controller->renderPartial("//layouts/headeradmin") ?>
<style>
    .short {
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 500px;
        overflow: hidden;
    }
</style>
<div class="container site-text-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Site Text', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name:ntext',

            [
                'attribute' => 'name:ntext',
//                'header' => ' Тўлов мақсади ',
                'format' => 'raw',
//                'contentOptions' => ['class' => 'create'],
                'value' => function ($data) {
//                    return Html::a(mb_substr($data->detail_purpose_of_payment,0,20).'...',
//                        [Yii::$app->controller->id.'/views','id'=>$data->id],['class'=>'short bank ']);
                    return Html::a(' <div class="short">' . $data->name . '</div>');
                }
            ],
            'create_at',
            'update_at',
            [
                'class' => 'yii\grid\ActionColumn',
//                'template' => '{view}  {update}  {delete}',
                'template' => '{view}  {update} ',
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
