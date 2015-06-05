<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idHorario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idHorario), array('view', 'id'=>$data->idHorario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraInicio')); ?>:</b>
	<?php echo CHtml::encode($data->HoraInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraFin')); ?>:</b>
	<?php echo CHtml::encode($data->HoraFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dia')); ?>:</b>
	<?php echo CHtml::encode($data->Dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_idOficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_Empresa_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_Empresa_RIF); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActaReunion_idActaReunion')); ?>:</b>
	<?php echo CHtml::encode($data->ActaReunion_idActaReunion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActaReunion_JuntaCondominio_idJuntaCondominio')); ?>:</b>
	<?php echo CHtml::encode($data->ActaReunion_JuntaCondominio_idJuntaCondominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActaReunion_JuntaCondominio_Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->ActaReunion_JuntaCondominio_Edificio_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActaReunion_TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->ActaReunion_TrabajadorEmpresa_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaOrdinaria_idAsambleaOrdinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaOrdinaria_idAsambleaOrdinaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaExtraordinaria_idAsambleaExtraordinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaExtraordinaria_idAsambleaExtraordinaria); ?>
	<br />

	*/ ?>

</div>