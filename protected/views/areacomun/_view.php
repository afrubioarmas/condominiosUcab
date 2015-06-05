<?php
/* @var $this AreacomunController */
/* @var $data Areacomun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAreaComun')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAreaComun), array('view', 'id'=>$data->idAreaComun)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />


</div>