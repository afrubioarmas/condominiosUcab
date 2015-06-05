<?php
/* @var $this TransaccionController */
/* @var $data Transaccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTransaccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTransaccion), array('view', 'id'=>$data->idTransaccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aprobado')); ?>:</b>
	<?php echo CHtml::encode($data->Aprobado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->Ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TDC_NumeroTDC')); ?>:</b>
	<?php echo CHtml::encode($data->TDC_NumeroTDC); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Transferencia_idTransferencia')); ?>:</b>
	<?php echo CHtml::encode($data->Transferencia_idTransferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Efectivo_idEfectivo')); ?>:</b>
	<?php echo CHtml::encode($data->Efectivo_idEfectivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cheque_numeroCheque')); ?>:</b>
	<?php echo CHtml::encode($data->Cheque_numeroCheque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fondo_idFondo')); ?>:</b>
	<?php echo CHtml::encode($data->Fondo_idFondo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagosProgramados_idPagosProgramados')); ?>:</b>
	<?php echo CHtml::encode($data->PagosProgramados_idPagosProgramados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propietario_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Propietario_Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajo_idTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajo_idTrabajo); ?>
	<br />

	*/ ?>

</div>