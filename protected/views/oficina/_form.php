<?php
/* @var $this OficinaController */
/* @var $model Oficina */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oficina-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Lugar_idLugar'); ?>
		<?php echo $form->textField($model,'Lugar_idLugar'); ?>
		<?php echo $form->error($model,'Lugar_idLugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa_RIF'); ?>
		<?php echo $form->textField($model,'Empresa_RIF'); ?>
		<?php echo $form->error($model,'Empresa_RIF'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->