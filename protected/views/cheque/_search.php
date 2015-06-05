<?php
/* @var $this ChequeController */
/* @var $model Cheque */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'numeroCheque'); ?>
		<?php echo $form->textField($model,'numeroCheque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Endosable'); ?>
		<?php echo $form->textField($model,'Endosable'); ?>
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