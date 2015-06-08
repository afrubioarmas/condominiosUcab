<?php
/* @var $this OficinaController */
/* @var $data Oficina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idOficina')); ?>:</b>
        <?php $lugar=Lugar::model()->findbypk($data->Lugar_idLugar); ?>
	<?php echo CHtml::link(CHtml::encode($data->idOficina), array('view', 'id'=>$data->idOficina)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lugar_idLugar')); ?>:</b>
	<?php echo CHtml::encode($lugar->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa_RIF); ?>
	<br />


</div>