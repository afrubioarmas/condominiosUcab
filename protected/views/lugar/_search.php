<?php
/* @var $this LugarController */
/* @var $model Lugar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idLugar'); ?>
		<?php echo $form->textField($model,'idLugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lugar_idLugar'); ?>
		<?php echo $form->textField($model,'Lugar_idLugar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->