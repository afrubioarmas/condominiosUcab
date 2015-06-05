<?php
/* @var $this SupervicionevaluacionController */
/* @var $model Supervicionevaluacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSupervicionEvaluacion'); ?>
		<?php echo $form->textField($model,'idSupervicionEvaluacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nota'); ?>
		<?php echo $form->textField($model,'Nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
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