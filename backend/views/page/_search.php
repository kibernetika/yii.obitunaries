<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_page_pg') ?>

    <?= $form->field($model, 'html_pg') ?>

    <?= $form->field($model, 'description_pg') ?>

    <?= $form->field($model, 'number_pg') ?>

    <?= $form->field($model, 'temlate_pg') ?>

    <?php // echo $form->field($model, 'id_booklet_pg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
