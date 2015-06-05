<?php
/* @var $this ChequeController */
/* @var $model Cheque */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cheque-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroCheque'); ?>
		<?php echo $form->textField($model,'numeroCheque'); ?>
		<?php echo $form->error($model,'numeroCheque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Endosable'); ?>
		<?php echo $form->textField($model,'Endosable'); ?>
		<?php echo $form->error($model,'Endosable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CuentaBancaria_NumeroDeCuenta'); ?>
		<?php echo $form->textField($model,'CuentaBancaria_NumeroDeCuenta'); ?>
		<?php echo $form->error($model,'CuentaBancaria_NumeroDeCuenta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->