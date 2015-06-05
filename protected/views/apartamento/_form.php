<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apartamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idApartamento'); ?>
		<?php echo $form->textField($model,'idApartamento'); ?>
		<?php echo $form->error($model,'idApartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo'); ?>
		<?php echo $form->error($model,'Saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alicuota'); ?>
		<?php echo $form->textField($model,'Alicuota'); ?>
		<?php echo $form->error($model,'Alicuota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Venta'); ?>
		<?php echo $form->textField($model,'Venta'); ?>
		<?php echo $form->error($model,'Venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Piso_idPiso'); ?>
		<?php echo $form->textField($model,'Piso_idPiso'); ?>
		<?php echo $form->error($model,'Piso_idPiso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->