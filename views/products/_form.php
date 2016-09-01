<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model software75\ecommerce\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">
    <?php $form = ActiveForm::begin([
		'type'=>ActiveForm::TYPE_HORIZONTAL,
		'formConfig'=>['labelSpan'=>3,'deviceSize'=>ActiveForm::SIZE_SMALL]
	]); ?>
	<div class="row">
		<?= Html::activeLabel($model, 'code', [
		'label'=>'code', 
		'class'=>'col-lg-3 control-label', 
		]) ?>
		<div class='col-lg-9'>
			<?= $form->field($model, 'code',['showLabels'=>false])->textInput(['maxlength' => true]) ?>
		</div>
	</div>
	<div class="row">
		<?= Html::activeLabel($model, 'description', [
		'label'=>'description', 
		'class'=>'col-lg-3 control-label', 
		]) ?>
		<div class='col-lg-9'>
			<?= $form->field($model, 'description',['showLabels'=>false])->textInput(['maxlength' => true]) ?>
		</div>
	</div>
	<div class="row">
		<?= Html::activeLabel($model, 'id_um', [
		'label'=>'id_um', 
		'class'=>'col-lg-3 control-label', 
		]) ?>
		<div class='col-lg-9'>
			<?= $form->field($model, 'id_um',['showLabels'=>false])->textInput() ?>
		</div>
	</div>
	<div class="row">
		<?= Html::activeLabel($model, 'id_type', [
		'label'=>'id_type', 
		'class'=>'col-lg-3 control-label', 
		]) ?>
		<div class='col-lg-9'>
			<?= $form->field($model, 'id_type',['showLabels'=>false])->textInput() ?>
		</div>
	</div>
    <div class="col-lg-offset-3">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
