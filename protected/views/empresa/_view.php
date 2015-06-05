<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RIF')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RIF), array('view', 'id'=>$data->RIF)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnidadTributaria')); ?>:</b>
	<?php echo CHtml::encode($data->UnidadTributaria); ?>
	<br />


</div>