<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OrderPropertieValue */

$this->title = 'Create Order Propertie Value';
$this->params['breadcrumbs'][] = ['label' => 'Order Propertie Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-propertie-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
