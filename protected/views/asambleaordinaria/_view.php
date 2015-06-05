<?php
/* @var $this AsambleaordinariaController */
/* @var $data Asambleaordinaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAsambleaOrdinaria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAsambleaOrdinaria), array('view', 'id'=>$data->idAsambleaOrdinaria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Motivo')); ?>:</b>
	<?php echo CHtml::encode($data->Motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PeriodoEnDias')); ?>:</b>
	<?php echo CHtml::encode($data->PeriodoEnDias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />


</div>