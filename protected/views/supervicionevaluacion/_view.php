<?php
/* @var $this SupervicionevaluacionController */
/* @var $data Supervicionevaluacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSupervicionEvaluacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSupervicionEvaluacion), array('view', 'id'=>$data->idSupervicionEvaluacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nota')); ?>:</b>
	<?php echo CHtml::encode($data->Nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEdificio_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEdificio_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Oficina_idOficina); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Oficina_Empresa_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Oficina_Empresa_RIF); ?>
	<br />

	*/ ?>

</div>