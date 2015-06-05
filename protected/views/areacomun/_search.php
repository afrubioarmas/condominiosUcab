<?php
/* @var $this AreacomunController */
/* @var $model Areacomun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAreaComun'); ?>
		<?php echo $form->textField($model,'idAreaComun'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edificio_RIF'); ?>
		<?php echo $form->textField($model,'Edificio_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->