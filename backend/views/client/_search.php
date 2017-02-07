<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_client_cl') ?>

    <?= $form->field($model, 'first_name_cl') ?>

    <?= $form->field($model, 'second_name_cl') ?>

    <?= $form->field($model, 'id_address_cl') ?>

    <?= $form->field($model, 'mob_phone_cl') ?>

    <?php // echo $form->field($model, 'annotation_cl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
