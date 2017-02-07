<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OrderItemArticle */

$this->title = 'Create Order Item Article';
$this->params['breadcrumbs'][] = ['label' => 'Order Item Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-item-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
