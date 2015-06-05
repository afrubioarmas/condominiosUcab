<?php
/* @var $this CuentabancariaController */
/* @var $model Cuentabancaria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NumeroDeCuenta'); ?>
		<?php echo $form->textField($model,'NumeroDeCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Banco'); ?>
		<?php echo $form->textField($model,'Banco',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->