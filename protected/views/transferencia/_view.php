<?php
/* @var $this TransferenciaController */
/* @var $data Transferencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTransferencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTransferencia), array('view', 'id'=>$data->idTransferencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CuentaBancaria_NumeroDeCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->CuentaBancaria_NumeroDeCuenta); ?>
	<br />


</div>