<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookletSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booklets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booklet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Booklet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_booklet_bk',
            'title_bk',
            'description_bk',
            'path_to_preview_bk:ntext',
            'path_to_pdf_bk:ntext',
             'id_cateory_bk',
             'price_bk',
             'active_bk:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
