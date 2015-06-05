<?php
/* @var $this NotificacionapartamentoController */
/* @var $model Notificacionapartamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idNotificacionApartamento'); ?>
		<?php echo $form->textField($model,'idNotificacionApartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->textField($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Transaccion_idTransaccion'); ?>
		<?php echo $form->textField($model,'Transaccion_idTransaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->textField($model,'Apartamento_idApartamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->