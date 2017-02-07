<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OrderPropertieValue */

$this->title = $model->id_property_value;
$this->params['breadcrumbs'][] = ['label' => 'Order Propertie Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-propertie-value-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_property_value' => $model->id_property_value, 'id_order_item' => $model->id_order_item], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_property_value' => $model->id_property_value, 'id_order_item' => $model->id_order_item], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_property_value',
            'id_order_item',
        ],
    ]) ?>

</div>
