<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model software75\ecommerce\models\Products */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Products',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="products-update">
	

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
