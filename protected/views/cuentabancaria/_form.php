<?php
/* @var $this CuentabancariaController */
/* @var $model Cuentabancaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuentabancaria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroDeCuenta'); ?>
		<?php echo $form->textField($model,'NumeroDeCuenta'); ?>
		<?php echo $form->error($model,'NumeroDeCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Banco'); ?>
                
		<?php echo $form->dropDownList($model,'Banco',array(0 =>'Seleccione Tipo de Edificio','Bancoro' =>'Bancoro','Banesco' =>'Banesco','Banco Canarias de Venezuela' =>'Banco Canarias de Venezuela','Banco Confederado' =>'Banco Confederado','Banco del Caribe' =>'Banco del Caribe','Banco de Venezuela' =>'Banco de Venezuela','Banco Provincial' =>'Banco Provincial','Banco Exterior' =>'Banco Exterior','Banco Mercantil' =>'Banco Mercantil','Banco Federal' =>'Banco Federal','Banco Bicentenario' =>'Banco Bicentenario','Corp Banca' =>'Corp Banca')); ?>
                
		<?php echo $form->error($model,'Banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oficina_idOficina'); ?>
		<?php echo $form->dropDownList($model,'Oficina_idOficina',array(NULL => 'Selecciona Lugar')+$data3); ?>
		<?php echo $form->error($model,'Oficina_idOficina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->