<?php
/* @var $this FondoController */
/* @var $model Fondo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fondo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo'); ?>
		<?php echo $form->error($model,'Saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->