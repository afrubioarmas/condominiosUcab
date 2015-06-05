<?php
/* @var $this InspeccionmantenimientoController */
/* @var $model Inspeccionmantenimiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inspeccionmantenimiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Inspeccion'); ?>
		<?php echo $form->textField($model,'Inspeccion'); ?>
		<?php echo $form->error($model,'Inspeccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mantenimiento'); ?>
		<?php echo $form->textField($model,'Mantenimiento'); ?>
		<?php echo $form->error($model,'Mantenimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AreaComun_idAreaComun'); ?>
		<?php echo $form->textField($model,'AreaComun_idAreaComun'); ?>
		<?php echo $form->error($model,'AreaComun_idAreaComun'); ?>
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