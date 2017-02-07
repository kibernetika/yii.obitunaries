<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderItemPictureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Item Pictures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-item-picture-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Item Picture', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_order_item_picture_op',
            'id_order_item_op',
            'path_to_file_op:ntext',
            'description_op',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
