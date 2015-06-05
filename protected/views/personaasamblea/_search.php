<?php
/* @var $this PersonaasambleaController */
/* @var $model Personaasamblea */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPersonaAsamblea'); ?>
		<?php echo $form->textField($model,'idPersonaAsamblea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aprobacion'); ?>
		<?php echo $form->textField($model,'Aprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Asistencia'); ?>
		<?php echo $form->textField($model,'Asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->textField($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->