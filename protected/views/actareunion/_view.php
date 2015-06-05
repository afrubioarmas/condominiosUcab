<?php
/* @var $this ActareunionController */
/* @var $data Actareunion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idActaReunion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idActaReunion), array('view', 'id'=>$data->idActaReunion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Motivo')); ?>:</b>
	<?php echo CHtml::encode($data->Motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Llamado')); ?>:</b>
	<?php echo CHtml::encode($data->Llamado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_idOficina); ?>
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('JuntaCondominio_idJuntaCondominio')); ?>:</b>
	<?php echo CHtml::encode($data->JuntaCondominio_idJuntaCondominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />

	*/ ?>

</div>