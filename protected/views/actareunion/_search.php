<?php
/* @var $this ActareunionController */
/* @var $model Actareunion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idActaReunion'); ?>
		<?php echo $form->textField($model,'idActaReunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Motivo'); ?>
		<?php echo $form->textField($model,'Motivo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Llamado'); ?>
		<?php echo $form->textField($model,'Llamado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->textField($model,'JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->