<?php
/* @var $this OficinaController */
/* @var $model Oficina */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idOficina'); ?>
		<?php echo $form->textField($model,'idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lugar_idLugar'); ?>
		<?php echo $form->textField($model,'Lugar_idLugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empresa_RIF'); ?>
		<?php echo $form->textField($model,'Empresa_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->