<?php
/* @var $this VentaapartamentoController */
/* @var $data Ventaapartamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVentaApartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVentaApartamento), array('view', 'id'=>$data->idVentaApartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comision')); ?>:</b>
	<?php echo CHtml::encode($data->Comision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apartamento_idApartamento')); ?>:</b>
	<?php echo CHtml::encode($data->Apartamento_idApartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />


</div>