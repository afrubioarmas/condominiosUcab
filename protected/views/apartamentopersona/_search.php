<?php
/* @var $this ApartamentopersonaController */
/* @var $model Apartamentopersona */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idApartamentoPersona'); ?>
		<?php echo $form->textField($model,'idApartamentoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->textField($model,'Apartamento_idApartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->