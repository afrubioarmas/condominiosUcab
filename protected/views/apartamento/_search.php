<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idApartamento'); ?>
		<?php echo $form->textField($model,'idApartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Alicuota'); ?>
		<?php echo $form->textField($model,'Alicuota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Venta'); ?>
		<?php echo $form->textField($model,'Venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Piso_idPiso'); ?>
		<?php echo $form->textField($model,'Piso_idPiso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->