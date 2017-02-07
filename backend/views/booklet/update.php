<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Booklet */

$this->title = 'Update Booklet: ' . $model->id_booklet_bk;
$this->params['breadcrumbs'][] = ['label' => 'Booklets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_booklet_bk, 'url' => ['view', 'id' => $model->id_booklet_bk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booklet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
