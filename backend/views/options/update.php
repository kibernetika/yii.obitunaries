<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Options */

$this->title = 'Update Options: ' . $model->id_options_op;
$this->params['breadcrumbs'][] = ['label' => 'Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_options_op, 'url' => ['view', 'id' => $model->id_options_op]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
