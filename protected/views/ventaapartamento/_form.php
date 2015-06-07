<?php
/* @var $this VentaapartamentoController */
/* @var $model Ventaapartamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ventaapartamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
		<?php echo $form->error($model,'Monto'); ?>
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
                                                'yearRange'=>'2015:2050', 
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
		<?php echo $form->labelEx($model,'Comision'); ?>
		<?php echo $form->textField($model,'Comision'); ?>
		<?php echo $form->error($model,'Comision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->textField($model,'Apartamento_idApartamento'); ?>
		<?php echo $form->error($model,'Apartamento_idApartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->textField($model,'TrabajadorEmpresa_Cedula'); ?>
		<?php echo $form->error($model,'TrabajadorEmpresa_Cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->