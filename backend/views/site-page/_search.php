<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SitePageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_site_pages_sp') ?>

    <?= $form->field($model, 'route_sp') ?>

    <?= $form->field($model, 'title_sp') ?>

    <?= $form->field($model, 'content_sp') ?>

    <?= $form->field($model, 'active_sp')->checkbox() ?>

    <?php // echo $form->field($model, 'order_number_sp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
