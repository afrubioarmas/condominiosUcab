<?php
/* @var $this ApartamentoController */
/* @var $data Apartamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idApartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idApartamento), array('view', 'id'=>$data->idApartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Saldo')); ?>:</b>
	<?php echo CHtml::encode($data->Saldo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estatus')); ?>:</b>
	<?php echo CHtml::encode($data->Estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alicuota')); ?>:</b>
	<?php echo CHtml::encode($data->Alicuota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Venta')); ?>:</b>
	<?php echo CHtml::encode($data->Venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Piso_idPiso')); ?>:</b>
	<?php echo CHtml::encode($data->Piso_idPiso); ?>
	<br />


</div>