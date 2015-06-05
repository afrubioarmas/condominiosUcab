<?php
/* @var $this DocumentocondominioController */
/* @var $model Documentocondominio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDocumentoCondominio'); ?>
		<?php echo $form->textField($model,'idDocumentoCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cargo'); ?>
		<?php echo $form->textField($model,'Cargo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CedulaSuplente'); ?>
		<?php echo $form->textField($model,'CedulaSuplente'); ?>
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
		<?php echo $form->label($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->textField($model,'JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->