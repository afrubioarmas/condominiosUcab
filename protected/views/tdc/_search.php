<?php
/* @var $this TdcController */
/* @var $model Tdc */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NumeroTDC'); ?>
		<?php echo $form->textField($model,'NumeroTDC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaVencimiento'); ?>
		<?php echo $form->textField($model,'FechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaExpedicion'); ?>
		<?php echo $form->textField($model,'FechaExpedicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoSeguridad'); ?>
		<?php echo $form->textField($model,'CodigoSeguridad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->