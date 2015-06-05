<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
		<?php echo $form->error($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aprobado'); ?>
		<?php echo $form->textField($model,'Aprobado'); ?>
		<?php echo $form->error($model,'Aprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AltoValor'); ?>
		<?php echo $form->textField($model,'AltoValor'); ?>
		<?php echo $form->error($model,'AltoValor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagoParcial'); ?>
		<?php echo $form->textField($model,'PagoParcial'); ?>
		<?php echo $form->error($model,'PagoParcial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mejora'); ?>
		<?php echo $form->textField($model,'Mejora'); ?>
		<?php echo $form->error($model,'Mejora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CartaConsulta_idCartaConsulta'); ?>
		<?php echo $form->textField($model,'CartaConsulta_idCartaConsulta'); ?>
		<?php echo $form->error($model,'CartaConsulta_idCartaConsulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servicio_idServicio'); ?>
		<?php echo $form->textField($model,'Servicio_idServicio'); ?>
		<?php echo $form->error($model,'Servicio_idServicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servicio_Proveedor_RIF'); ?>
		<?php echo $form->textField($model,'Servicio_Proveedor_RIF'); ?>
		<?php echo $form->error($model,'Servicio_Proveedor_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->