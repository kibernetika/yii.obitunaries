<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PropertieValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propertie Values';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propertie-value-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Propertie Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_property_value_vl',
            'id_property_vl',
            'value_vl',
            'type_price_change_vl',
            'change_on_vl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
