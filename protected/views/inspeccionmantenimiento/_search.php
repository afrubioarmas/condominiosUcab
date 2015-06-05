<?php
/* @var $this InspeccionmantenimientoController */
/* @var $model Inspeccionmantenimiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idInspeccionMantenimiento'); ?>
		<?php echo $form->textField($model,'idInspeccionMantenimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inspeccion'); ?>
		<?php echo $form->textField($model,'Inspeccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mantenimiento'); ?>
		<?php echo $form->textField($model,'Mantenimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AreaComun_idAreaComun'); ?>
		<?php echo $form->textField($model,'AreaComun_idAreaComun'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEdificio_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->