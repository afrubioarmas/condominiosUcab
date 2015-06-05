<?php
/* @var $this TdcController */
/* @var $model Tdc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tdc-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroTDC'); ?>
		<?php echo $form->textField($model,'NumeroTDC'); ?>
		<?php echo $form->error($model,'NumeroTDC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaVencimiento'); ?>
		<?php echo $form->textField($model,'FechaVencimiento'); ?>
		<?php echo $form->error($model,'FechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaExpedicion'); ?>
		<?php echo $form->textField($model,'FechaExpedicion'); ?>
		<?php echo $form->error($model,'FechaExpedicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoSeguridad'); ?>
		<?php echo $form->textField($model,'CodigoSeguridad'); ?>
		<?php echo $form->error($model,'CodigoSeguridad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->