<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrderItemArticle */

$this->title = 'Update Order Item Article: ' . $model->id_order_item_oa;
$this->params['breadcrumbs'][] = ['label' => 'Order Item Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_order_item_oa, 'url' => ['view', 'id' => $model->id_order_item_oa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-item-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
