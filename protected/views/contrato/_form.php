<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaInicio'); ?>
		<?php echo $form->textField($model,'FechaInicio'); ?>
		<?php echo $form->error($model,'FechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaFin'); ?>
		<?php echo $form->textField($model,'FechaFin'); ?>
		<?php echo $form->error($model,'FechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sueldo'); ?>
		<?php echo $form->textField($model,'Sueldo'); ?>
		<?php echo $form->error($model,'Sueldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
		<?php echo $form->error($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEdificio_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->