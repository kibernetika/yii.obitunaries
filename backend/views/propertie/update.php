<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Propertie */

$this->title = 'Update Propertie: ' . $model->id_propertie_pr;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_propertie_pr, 'url' => ['view', 'id' => $model->id_propertie_pr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propertie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
