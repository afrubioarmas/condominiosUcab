<?php
/* @var $this VentaapartamentoController */
/* @var $model Ventaapartamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idVentaApartamento'); ?>
		<?php echo $form->textField($model,'idVentaApartamento'); ?>
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
		<?php echo $form->label($model,'Comision'); ?>
		<?php echo $form->textField($model,'Comision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->textField($model,'Apartamento_idApartamento'); ?>
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