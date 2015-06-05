<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaccion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
		<?php echo $form->error($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aprobado'); ?>
		<?php echo $form->textField($model,'Aprobado'); ?>
		<?php echo $form->error($model,'Aprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ingreso'); ?>
		<?php echo $form->textField($model,'Ingreso'); ?>
		<?php echo $form->error($model,'Ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TDC_NumeroTDC'); ?>
		<?php echo $form->textField($model,'TDC_NumeroTDC'); ?>
		<?php echo $form->error($model,'TDC_NumeroTDC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Transferencia_idTransferencia'); ?>
		<?php echo $form->textField($model,'Transferencia_idTransferencia'); ?>
		<?php echo $form->error($model,'Transferencia_idTransferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Efectivo_idEfectivo'); ?>
		<?php echo $form->textField($model,'Efectivo_idEfectivo'); ?>
		<?php echo $form->error($model,'Efectivo_idEfectivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cheque_numeroCheque'); ?>
		<?php echo $form->textField($model,'Cheque_numeroCheque'); ?>
		<?php echo $form->error($model,'Cheque_numeroCheque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fondo_idFondo'); ?>
		<?php echo $form->textField($model,'Fondo_idFondo'); ?>
		<?php echo $form->error($model,'Fondo_idFondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagosProgramados_idPagosProgramados'); ?>
		<?php echo $form->textField($model,'PagosProgramados_idPagosProgramados'); ?>
		<?php echo $form->error($model,'PagosProgramados_idPagosProgramados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
		<?php echo $form->error($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
		<?php echo $form->error($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajo_idTrabajo'); ?>
		<?php echo $form->textField($model,'Trabajo_idTrabajo'); ?>
		<?php echo $form->error($model,'Trabajo_idTrabajo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->