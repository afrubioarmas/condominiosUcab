<?php
/* @var $this LugarController */
/* @var $data Lugar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLugar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLugar), array('view', 'id'=>$data->idLugar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lugar_idLugar')); ?>:</b>
	<?php echo CHtml::encode($data->Lugar_idLugar); ?>
	<br />


</div>