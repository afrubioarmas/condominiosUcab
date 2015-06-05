<?php
/* @var $this CuentabancariaController */
/* @var $data Cuentabancaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroDeCuenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NumeroDeCuenta), array('view', 'id'=>$data->NumeroDeCuenta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Banco')); ?>:</b>
	<?php echo CHtml::encode($data->Banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Oficina_idOficina')); ?>:</b>
	<?php echo CHtml::encode($data->Oficina_idOficina); ?>
	<br />


</div>