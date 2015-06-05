<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idHorario'); ?>
		<?php echo $form->textField($model,'idHorario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoraInicio'); ?>
		<?php echo $form->textField($model,'HoraInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoraFin'); ?>
		<?php echo $form->textField($model,'HoraFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dia'); ?>
		<?php echo $form->textField($model,'Dia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActaReunion_idActaReunion'); ?>
		<?php echo $form->textField($model,'ActaReunion_idActaReunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActaReunion_JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->textField($model,'ActaReunion_JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActaReunion_JuntaCondominio_Edificio_RIF'); ?>
		<?php echo $form->textField($model,'ActaReunion_JuntaCondominio_Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActaReunion_TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'ActaReunion_TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->textField($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->