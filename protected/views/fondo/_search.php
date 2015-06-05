<?php
/* @var $this FondoController */
/* @var $model Fondo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFondo'); ?>
		<?php echo $form->textField($model,'idFondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->