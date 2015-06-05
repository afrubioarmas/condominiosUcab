<?php
/* @var $this AtencionController */
/* @var $data Atencion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAtencion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAtencion), array('view', 'id'=>$data->idAtencion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estatus')); ?>:</b>
	<?php echo CHtml::encode($data->Estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Razon')); ?>:</b>
	<?php echo CHtml::encode($data->Razon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('JuntaCondominio_idJuntaCondominio')); ?>:</b>
	<?php echo CHtml::encode($data->JuntaCondominio_idJuntaCondominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JuntaCondominio_Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->JuntaCondominio_Edificio_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propietario_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Propietario_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_idOficina); ?>
	<br />

	*/ ?>

</div>