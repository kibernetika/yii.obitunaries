<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PropertieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propertie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_propertie_pr') ?>

    <?= $form->field($model, 'id_category_pr') ?>

    <?= $form->field($model, 'name_pr') ?>

    <?= $form->field($model, 'type_pr') ?>

    <?= $form->field($model, 'description_pr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
