<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrderItemPicture */

$this->title = 'Update Order Item Picture: ' . $model->id_order_item_picture_op;
$this->params['breadcrumbs'][] = ['label' => 'Order Item Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_order_item_picture_op, 'url' => ['view', 'id' => $model->id_order_item_picture_op]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-item-picture-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
