<?php
/* @var $this InspeccionmantenimientoController */
/* @var $data Inspeccionmantenimiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idInspeccionMantenimiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idInspeccionMantenimiento), array('view', 'id'=>$data->idInspeccionMantenimiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inspeccion')); ?>:</b>
	<?php echo CHtml::encode($data->Inspeccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mantenimiento')); ?>:</b>
	<?php echo CHtml::encode($data->Mantenimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AreaComun_idAreaComun')); ?>:</b>
	<?php echo CHtml::encode($data->AreaComun_idAreaComun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEdificio_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEdificio_Cedula); ?>
	<br />


</div>