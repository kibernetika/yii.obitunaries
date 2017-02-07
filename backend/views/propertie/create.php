<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Propertie */

$this->title = 'Create Propertie';
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propertie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
