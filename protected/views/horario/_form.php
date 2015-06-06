<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraInicio'); ?>
		<?php echo $form->textField($model,'HoraInicio'); ?>
		<?php echo $form->error($model,'HoraInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraFin'); ?>
		<?php echo $form->textField($model,'HoraFin'); ?>
		<?php echo $form->error($model,'HoraFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dia'); ?>
		<?php
			$this->widget ('zii.widgets.jui.CJuiDatePicker',  
				array (
					'model'=>$model,
					'attribute'=>'Dia',
					'language' => 'es',
					'options'=>array (
						'dateFormat'=>'yy-mm-dd',
						'changeMonth'=>'true', 
                                                'changeYear'=>'true', 
                                                'yearRange'=>'2015:2050', 
  						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
					),  
				)   
			);
		?>
		<?php echo $form->error($model,'Dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'Oficina_idOficina'); ?>
		<?php echo $form->error($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'Oficina_Empresa_RIF'); ?>
		<?php echo $form->error($model,'Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Oficina_idOficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Oficina_Empresa_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ActaReunion_idActaReunion'); ?>
		<?php echo $form->textField($model,'ActaReunion_idActaReunion'); ?>
		<?php echo $form->error($model,'ActaReunion_idActaReunion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ActaReunion_JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->textField($model,'ActaReunion_JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->error($model,'ActaReunion_JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ActaReunion_JuntaCondominio_Edificio_RIF'); ?>
		<?php echo $form->textField($model,'ActaReunion_JuntaCondominio_Edificio_RIF'); ?>
		<?php echo $form->error($model,'ActaReunion_JuntaCondominio_Edificio_RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ActaReunion_TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'ActaReunion_TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->error($model,'ActaReunion_TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->textField($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
		<?php echo $form->error($model,'AsambleaOrdinaria_idAsambleaOrdinaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->textField($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
		<?php echo $form->error($model,'AsambleaExtraordinaria_idAsambleaExtraordinaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->