<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model software75\ecommerce\models\Products */

$this->title = Yii::t('app', 'Crea Products');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">
			<?= $this->render('_form', [
				'model' => $model,
			]) ?>
</div>
