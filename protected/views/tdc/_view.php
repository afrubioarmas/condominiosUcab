<?php
/* @var $this TdcController */
/* @var $data Tdc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroTDC')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NumeroTDC), array('view', 'id'=>$data->NumeroTDC)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marca')); ?>:</b>
	<?php echo CHtml::encode($data->Marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaVencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FechaVencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaExpedicion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaExpedicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoSeguridad')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoSeguridad); ?>
	<br />


</div>