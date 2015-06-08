<?php
/* @var $this ActareunionController */
/* @var $model Actareunion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actareunion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php
			$this->widget ('zii.widgets.jui.CJuiDatePicker',  
				array (
					'model'=>$model,
					'attribute'=>'Fecha',
					'language' => 'es',
					'options'=>array (
						'dateFormat'=>'yy-mm-dd',
						'changeMonth'=>'true', 
                                                'changeYear'=>'true', 
                                                'yearRange'=>'2015:2030', 
  						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
					),  
				)   
			);
		?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Motivo'); ?>
		<?php echo $form->textField($model,'Motivo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Llamado'); ?>
		<?php echo $form->textField($model,'Llamado'); ?>
		<?php echo $form->error($model,'Llamado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edificio_RIF'); ?>
		<?php echo $form->dropDownList($model,'Edificio_RIF',array(NULL => 'Selecciona Edificio')+$edificios); ?>
		<?php echo $form->error($model,'Edificio_RIF'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'Oficina_idOficina'); ?>
		<?php echo $form->dropDownList($model,'Oficina_idOficina',array(NULL => 'Selecciona Oficina')+$oficinas); ?>
		<?php echo $form->error($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row" style="display:none;">
		<?php echo $form->labelEx($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $model->JuntaCondominio_idJuntaCondominio=0; ?>
		<?php echo $form->error($model,'JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->dropDownList($model,'TrabajadorEmpresa_Cedula',array(NULL => 'Selecciona Trabajador de Empresa')+$trabajadoresempresa); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->