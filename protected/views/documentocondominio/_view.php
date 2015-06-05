<?php
/* @var $this DocumentocondominioController */
/* @var $data Documentocondominio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDocumentoCondominio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDocumentoCondominio), array('view', 'id'=>$data->idDocumentoCondominio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cargo')); ?>:</b>
	<?php echo CHtml::encode($data->Cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CedulaSuplente')); ?>:</b>
	<?php echo CHtml::encode($data->CedulaSuplente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->FechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propietario_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Propietario_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JuntaCondominio_idJuntaCondominio')); ?>:</b>
	<?php echo CHtml::encode($data->JuntaCondominio_idJuntaCondominio); ?>
	<br />


</div>