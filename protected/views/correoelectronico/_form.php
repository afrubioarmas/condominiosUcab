<?php
/* @var $this CorreoelectronicoController */
/* @var $model Correoelectronico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'correoelectronico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
		<?php echo $form->error($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'Oficina_Empresa_RIF'); ?>
		<?php echo $form->error($model,'Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
		<?php echo $form->error($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEdificio_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->