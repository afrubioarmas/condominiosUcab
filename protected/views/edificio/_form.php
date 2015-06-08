<?php
/* @var $this EdificioController */
/* @var $model Edificio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'edificio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RIF'); ?>
		<?php echo $form->textField($model,'RIF'); ?>
		<?php echo $form->error($model,'RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->dropDownList($model,'Tipo', array(NULL =>'Seleccione Tipo de Edificio','Residencial' =>'Residencial','Vacacional' =>'Vacacional')); ?>
		<?php echo $form->error($model,'Tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InteresMora'); ?>
		<?php echo $form->textField($model,'InteresMora'); ?>
		<?php echo $form->error($model,'InteresMora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asistencia1Reunion'); ?>
		<?php echo $form->textField($model,'Asistencia1Reunion'); ?>
		<?php echo $form->error($model,'Asistencia1Reunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asistencia2Reunion'); ?>
		<?php echo $form->textField($model,'Asistencia2Reunion'); ?>
		<?php echo $form->error($model,'Asistencia2Reunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DerechoVoto'); ?>
		<?php echo $form->dropDownList($model,'DerechoVoto', array('0' =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'DerechoVoto'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Lugar_idLugar'); ?>
		<?php echo $form->dropDownList($model,'Lugar_idLugar',array(NULL => 'Selecciona Lugar')+$data3); ?>
		<?php echo $form->error($model,'Lugar_idLugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->dropDownList($model,'TrabajadorEmpresa_Cedula',array(NULL => 'Selecciona Trabajador')+$trabajadores); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>
        <?php if(isset($update)){}else{ ?>
        <div class="row">
		<?php echo $form->labelEx($model,'Pisos'); ?>
		<?php echo $form->textField($model,'Pisos'); ?>
		<?php echo $form->error($model,'Pisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ApartamentosPiso'); ?>
		<?php echo $form->textField($model,'ApartamentosPiso'); ?>
		<?php echo $form->error($model,'ApartamentosPiso'); ?>
	</div>
        <?php } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->