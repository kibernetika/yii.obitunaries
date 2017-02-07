<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BookletSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booklet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_booklet_bk') ?>

    <?= $form->field($model, 'title_bk') ?>

    <?= $form->field($model, 'description_bk') ?>

    <?= $form->field($model, 'path_to_preview_bk') ?>

    <?= $form->field($model, 'path_to_pdf_bk') ?>

    <?php // echo $form->field($model, 'id_cateory_bk') ?>

    <?php // echo $form->field($model, 'price_bk') ?>

    <?php // echo $form->field($model, 'active_bk')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
