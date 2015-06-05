<?php
/* @var $this EdificioController */
/* @var $model Edificio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RIF'); ?>
		<?php echo $form->textField($model,'RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InteresMora'); ?>
		<?php echo $form->textField($model,'InteresMora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Asistencia1Reunion'); ?>
		<?php echo $form->textField($model,'Asistencia1Reunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Asistencia2Reunion'); ?>
		<?php echo $form->textField($model,'Asistencia2Reunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DerechoVoto'); ?>
		<?php echo $form->textField($model,'DerechoVoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lugar_idLugar'); ?>
		<?php echo $form->textField($model,'Lugar_idLugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->label($model,'Pisos'); ?>
		<?php echo $form->textField($model,'Pisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApartamentosPiso'); ?>
		<?php echo $form->textField($model,'ApartamentosPiso'); ?>
	</div>
            
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->