<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Yii::$app->controller->renderPartial("//layouts/headeradmin") ?>
<style>
    .short {
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 450px;
        overflow: hidden;
    }
</style>
<div class="container books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kitob qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'text:ntext',
            [
                'attribute' => 'text:ntext',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a(' <div class="short">' . $data->text . '</div>');
                }
            ],
            'file',
            'create_at',
            'update_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<style>
    #w0 {
        overflow-x: auto;
    }
</style>