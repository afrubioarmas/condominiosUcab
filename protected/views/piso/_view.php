<?php
/* @var $this PisoController */
/* @var $data Piso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPiso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPiso), array('view', 'id'=>$data->idPiso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroDePiso')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroDePiso); ?>
	<br />


</div>