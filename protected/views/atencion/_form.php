<?php
/* @var $this AtencionController */
/* @var $model Atencion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'atencion-form',
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
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus'); ?>
		<?php echo $form->error($model,'Estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Razon'); ?>
		<?php echo $form->textField($model,'Razon',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Razon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono'); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo'); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina'); ?>
		<?php echo $form->textField($model,'Oficina'); ?>
		<?php echo $form->error($model,'Oficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->textField($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->error($model,'JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JuntaCondominio_Edificio_RIF'); ?>
		<?php echo $form->textField($model,'JuntaCondominio_Edificio_RIF'); ?>
		<?php echo $form->error($model,'JuntaCondominio_Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
		<?php echo $form->error($model,'Propietario_Cedula'); ?>
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