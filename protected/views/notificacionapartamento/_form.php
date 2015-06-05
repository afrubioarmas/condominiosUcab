<?php
/* @var $this NotificacionapartamentoController */
/* @var $model Notificacionapartamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notificacionapartamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->textField($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->error($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Transaccion_idTransaccion'); ?>
		<?php echo $form->textField($model,'Transaccion_idTransaccion'); ?>
		<?php echo $form->error($model,'Transaccion_idTransaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->textField($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->error($model,'Apartamento_idApartamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->