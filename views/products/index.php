<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\alert\AlertBlock;

/* @var $this yii\web\View */
/* @var $searchModel software75\ecommerce\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
echo AlertBlock::widget();
?>
<div class="products-index">
	<div class="box box-danger">
		<div class="box-header with-border">
			<h2 class="box-title col-md-6"><?= Html::encode($this->title) ?></h2>
			<div class="pull-right">
				<p>
					<?= Html::a('Insert new products',false,['value'=>Url::to(['products/create']),
																						'title'=>'Insert new products',
																						'class' => 'showModalButton btn btn-primary'])  ?>
				</p>
			</div>
		</div>
		<div class="box-body with-border">
						    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
			
							<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
        'columns' => [
						 //['class' => 'yii\grid\SerialColumn'],
			            'id',
            'code',
            'description',
            'id_um',
            'id_type',
			[
				'format'=>'raw',
				'width'=>'6%',
				'value'=>function($model){
					return '<a value="'.Url::to(['products/update','id'=>$model->id]).'" class="showModalButton btn btn-xs btn-tertiary">View&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>';
								
				}
			],
            [
				'format'=>'raw',
				'width'=>'6%',
				'value'=>function($model){
					return '<a href="'.Url::to(['products/delete','id'=>$model->id]).'" data-confirm="Sei sicuro di voler eliminare l\'elemento?" data-method="POST"  class="btn btn-xs btn-tertiary">Del&nbsp;&nbsp;<i class="fa fa-trash"></i></a>';
								
				}
			],
        ],
		'summary'=>'',
		'export' => false,
		'tableOptions'=>[
						'class'=>'table table-bordered table-highlight table-hover',
						],
    ]); ?>
		</div>
	</div>
</div>
