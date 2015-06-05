<?php
/* @var $this AtencionController */
/* @var $model Atencion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAtencion'); ?>
		<?php echo $form->textField($model,'idAtencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Razon'); ?>
		<?php echo $form->textField($model,'Razon',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina'); ?>
		<?php echo $form->textField($model,'Oficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->textField($model,'JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JuntaCondominio_Edificio_RIF'); ?>
		<?php echo $form->textField($model,'JuntaCondominio_Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Propietario_Cedula'); ?>
		<?php echo $form->textField($model,'Propietario_Cedula'); ?>
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