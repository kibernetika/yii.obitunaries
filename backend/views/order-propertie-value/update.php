<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrderPropertieValue */

$this->title = 'Update Order Propertie Value: ' . $model->id_property_value;
$this->params['breadcrumbs'][] = ['label' => 'Order Propertie Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_property_value, 'url' => ['view', 'id_property_value' => $model->id_property_value, 'id_order_item' => $model->id_order_item]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-propertie-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
