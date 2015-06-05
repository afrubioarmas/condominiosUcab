<?php
/* @var $this TrabajadorempresaController */
/* @var $model Trabajadorempresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajadorempresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula'); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveLogueo'); ?>
		<?php echo $form->textField($model,'ClaveLogueo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveLogueo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rol'); ?>
		<?php echo $form->textField($model,'Rol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contrato'); ?>
		<?php echo $form->textField($model,'Contrato',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
		<?php echo $form->error($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->