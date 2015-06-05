<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTransferencia'); ?>
		<?php echo $form->textField($model,'idTransferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CuentaBancaria_NumeroDeCuenta'); ?>
		<?php echo $form->textField($model,'CuentaBancaria_NumeroDeCuenta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->