<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idContrato), array('view', 'id'=>$data->idContrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->FechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sueldo')); ?>:</b>
	<?php echo CHtml::encode($data->Sueldo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEdificio_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEdificio_Cedula); ?>
	<br />


</div>