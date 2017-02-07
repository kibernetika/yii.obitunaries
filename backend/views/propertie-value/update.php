<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PropertieValue */

$this->title = 'Update Propertie Value: ' . $model->id_property_value_vl;
$this->params['breadcrumbs'][] = ['label' => 'Propertie Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_property_value_vl, 'url' => ['view', 'id' => $model->id_property_value_vl]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propertie-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
