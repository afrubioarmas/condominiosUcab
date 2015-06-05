<?php
/* @var $this PagosprogramadosController */
/* @var $data Pagosprogramados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPagosProgramados')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPagosProgramados), array('view', 'id'=>$data->idPagosProgramados)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MontoPorApartamento')); ?>:</b>
	<?php echo CHtml::encode($data->MontoPorApartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />


</div>