<?php
/* @var $this PisoController */
/* @var $model Piso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPiso'); ?>
		<?php echo $form->textField($model,'idPiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroDePiso'); ?>
		<?php echo $form->textField($model,'NumeroDePiso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->