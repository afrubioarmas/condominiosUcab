<?php
/* @var $this CorreoelectronicoController */
/* @var $model Correoelectronico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCorrecoElectronico'); ?>
		<?php echo $form->textField($model,'idCorrecoElectronico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEdificio_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->