<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PropertieValue */

$this->title = 'Create Propertie Value';
$this->params['breadcrumbs'][] = ['label' => 'Propertie Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propertie-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
