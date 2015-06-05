<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTransaccion'); ?>
		<?php echo $form->textField($model,'idTransaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aprobado'); ?>
		<?php echo $form->textField($model,'Aprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ingreso'); ?>
		<?php echo $form->textField($model,'Ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TDC_NumeroTDC'); ?>
		<?php echo $form->textField($model,'TDC_NumeroTDC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Transferencia_idTransferencia'); ?>
		<?php echo $form->textField($model,'Transferencia_idTransferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Efectivo_idEfectivo'); ?>
		<?php echo $form->textField($model,'Efectivo_idEfectivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cheque_numeroCheque'); ?>
		<?php echo $form->textField($model,'Cheque_numeroCheque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fondo_idFondo'); ?>
		<?php echo $form->textField($model,'Fondo_idFondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PagosProgramados_idPagosProgramados'); ?>
		<?php echo $form->textField($model,'PagosProgramados_idPagosProgramados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trabajo_idTrabajo'); ?>
		<?php echo $form->textField($model,'Trabajo_idTrabajo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->