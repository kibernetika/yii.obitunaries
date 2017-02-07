<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PropertieValueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propertie-value-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_property_value_vl') ?>

    <?= $form->field($model, 'id_property_vl') ?>

    <?= $form->field($model, 'value_vl') ?>

    <?= $form->field($model, 'type_price_change_vl') ?>

    <?= $form->field($model, 'change_on_vl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
