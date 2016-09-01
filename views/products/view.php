<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model software75\ecommerce\models\Products */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

<div class="portlet">
		<div class="portlet-header">
			<h3>
				<i class="fa fa-table"></i>
				<?= Html::encode($this->title) ?>
			</h3>
			<ul class="portlet-tools pull-right">
				<li>
					<div class="btn-group">
						<button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
							Actions &nbsp;<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id]) ?></li>
							<li><?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?></li>
						</ul>
							
					</div>
				</li>
			</ul>
		</div>
		<div class="portlet-content">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'description',
            'id_um',
            'id_type',
        ],
    ]) ?>
	</div>
</div>
