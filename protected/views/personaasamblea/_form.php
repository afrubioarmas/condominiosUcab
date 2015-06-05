<?php
/* @var $this PersonaasambleaController */
/* @var $model Personaasamblea */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personaasamblea-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Aprobacion'); ?>
		<?php echo $form->textField($model,'Aprobacion'); ?>
		<?php echo $form->error($model,'Aprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asistencia'); ?>
		<?php echo $form->textField($model,'Asistencia'); ?>
		<?php echo $form->error($model,'Asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->textField($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->error($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
		<?php echo $form->error($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->