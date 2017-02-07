<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrderItemFile */

$this->title = 'Update Order Item File: ' . $model->id_order_item_of;
$this->params['breadcrumbs'][] = ['label' => 'Order Item Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_order_item_of, 'url' => ['view', 'id' => $model->id_order_item_of]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-item-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
