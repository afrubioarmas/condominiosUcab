<?php
/* @var $this ServicioController */
/* @var $data Servicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idServicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idServicio), array('view', 'id'=>$data->idServicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Proveedor_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Proveedor_RIF); ?>
	<br />


</div>