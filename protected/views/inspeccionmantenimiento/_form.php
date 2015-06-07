<?php
/* @var $this InspeccionmantenimientoController */
/* @var $model Inspeccionmantenimiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inspeccionmantenimiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Inspeccion'); ?>
		<?php echo $form->dropDownList($model,'Inspeccion', array('0' =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'Inspeccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mantenimiento'); ?>
		<?php echo $form->dropDownList($model,'Mantenimiento', array('0' =>'No','1' =>'Si')); ?>
		<?php echo $form->error($model,'Mantenimiento'); ?>
	</div>

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
		?>		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AreaComun_idAreaComun'); ?>
		<?php echo $form->dropDownList($model,'AreaComun_idAreaComun',array(0 => 'Selecciona Area Comun')+$areascomun); ?>
		<?php echo $form->error($model,'AreaComun_idAreaComun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEdificio_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEdificio_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->