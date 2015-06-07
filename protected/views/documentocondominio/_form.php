<?php
/* @var $this DocumentocondominioController */
/* @var $model Documentocondominio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documentocondominio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cargo'); ?>
		<?php echo $form->textField($model,'Cargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Cargo'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Miembro Principal'); ?>
		<?php echo $form->dropDownList($model,'Propietario_Cedula',array(0 => 'Selecciona Miembro Principal')+$propietarios); ?>
		<?php echo $form->error($model,'Propietario_Cedula'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Suplente'); ?>
                <?php echo $form->dropDownList($model,'CedulaSuplente',array(0 => 'Selecciona Suplente')+$propietarios); ?>
		<?php echo $form->error($model,'CedulaSuplente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaInicio'); ?>
                <?php
			$this->widget ('zii.widgets.jui.CJuiDatePicker',  
				array (
					'model'=>$model,
					'attribute'=>'FechaInicio',
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
                <?php echo $form->error($model,'FechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaFin'); ?>
                <?php
			$this->widget ('zii.widgets.jui.CJuiDatePicker',  
				array (
					'model'=>$model,
					'attribute'=>'FechaFin',
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
                <?php echo $form->error($model,'FechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JuntaCondominio_idJuntaCondominio'); ?>
		<?php echo $form->dropDownList($model,'JuntaCondominio_idJuntaCondominio',array(0 => 'Selecciona Junta de Condominio por Edificio')+$juntascondominioEdificio); ?>
		<?php echo $form->error($model,'JuntaCondominio_idJuntaCondominio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->