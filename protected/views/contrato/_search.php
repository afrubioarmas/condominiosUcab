<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idContrato'); ?>
		<?php echo $form->textField($model,'idContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaInicio'); ?>
		<?php echo $form->textField($model,'FechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaFin'); ?>
		<?php echo $form->textField($model,'FechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sueldo'); ?>
		<?php echo $form->textField($model,'Sueldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEdificio_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->