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
		<?php echo $form->dropDownList($model,'Aprobado', array('0' =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'Aprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AltoValor'); ?>
		<?php echo $form->dropDownList($model,'AltoValor', array('0' =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'AltoValor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagoParcial'); ?>
		<?php echo $form->textField($model,'PagoParcial'); ?>
		<?php echo $form->error($model,'PagoParcial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mejora'); ?>
		<?php echo $form->dropDownList($model,'Mejora', array('0' =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'Mejora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->dropDownList($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria', array(NULL =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CartaConsulta_idCartaConsulta'); ?>
		<?php echo $form->dropDownList($model,'CartaConsulta_idCartaConsulta', array(NULL =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'CartaConsulta_idCartaConsulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servicio_idServicio'); ?>
		<?php echo $form->dropDownList($model,'Servicio_idServicio', array(NULL =>'Seleccione Proveedor')+$servicios); ?>
		<?php echo $form->error($model,'Servicio_idServicio'); ?>
	</div>

        	<div class="row">
		<?php echo $form->labelEx($model,'Servicio_idServicio2'); ?>
		<?php echo $form->dropDownList($model,'Servicio_idServicio2', array(NULL =>'Seleccione Proveedor')+$servicios); ?>
		<?php echo $form->error($model,'Servicio_idServicio2'); ?>
	</div>

        	<div class="row">
		<?php echo $form->labelEx($model,'Servicio_idServicio3'); ?>
		<?php echo $form->dropDownList($model,'Servicio_idServicio3', array(NULL =>'Seleccione Proveedor')+$servicios); ?>
		<?php echo $form->error($model,'Servicio_idServicio3'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->