<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\Url;

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
            'names',
            'prices',
            'sales',
            'views',
            'menu.name',
            //'created_at',
            //'updated_at',

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