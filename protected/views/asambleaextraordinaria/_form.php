<?php
/* @var $this AsambleaextraordinariaController */
/* @var $model Asambleaextraordinaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asambleaextraordinaria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Motivo'); ?>
		<?php echo $form->textField($model,'Motivo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Propuesta'); ?>
		<?php echo $form->textField($model,'Propuesta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Propuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->