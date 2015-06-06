<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTrabajo'); ?>
		<?php echo $form->textField($model,'idTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aprobado'); ?>
		<?php echo $form->textField($model,'Aprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AltoValor'); ?>
		<?php echo $form->textField($model,'AltoValor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PagoParcial'); ?>
		<?php echo $form->textField($model,'PagoParcial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mejora'); ?>
		<?php echo $form->textField($model,'Mejora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CartaConsulta_idCartaConsulta'); ?>
		<?php echo $form->textField($model,'CartaConsulta_idCartaConsulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Servicio_idServicio'); ?>
		<?php echo $form->textField($model,'Servicio_idServicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Servicio_Proveedor_RIF'); ?>
		<?php echo $form->textField($model,'Servicio_Proveedor_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->