<?php
/* @var $this AsambleaextraordinariaController */
/* @var $data Asambleaextraordinaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAsambleaExtraordinaria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAsambleaExtraordinaria), array('view', 'id'=>$data->idAsambleaExtraordinaria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Motivo')); ?>:</b>
	<?php echo CHtml::encode($data->Motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propuesta')); ?>:</b>
	<?php echo CHtml::encode($data->Propuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />


</div>