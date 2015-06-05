<?php
/* @var $this FondoController */
/* @var $data Fondo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFondo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFondo), array('view', 'id'=>$data->idFondo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Saldo')); ?>:</b>
	<?php echo CHtml::encode($data->Saldo); ?>
	<br />


</div>