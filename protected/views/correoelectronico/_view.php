<?php
/* @var $this CorreoelectronicoController */
/* @var $data Correoelectronico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCorrecoElectronico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCorrecoElectronico), array('view', 'id'=>$data->idCorrecoElectronico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_idOficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_Empresa_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_Empresa_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propietario_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Propietario_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEdificio_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEdificio_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Oficina_idOficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Oficina_Empresa_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Oficina_Empresa_RIF); ?>
	<br />

	*/ ?>

</div>