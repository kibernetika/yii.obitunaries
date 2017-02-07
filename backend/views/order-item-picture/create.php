<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OrderItemPicture */

$this->title = 'Create Order Item Picture';
$this->params['breadcrumbs'][] = ['label' => 'Order Item Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-item-picture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
