<?php
/* @var $this TrabajadoredificioController */
/* @var $data Trabajadoredificio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClaveLogueo')); ?>:</b>
	<?php echo CHtml::encode($data->ClaveLogueo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rol')); ?>:</b>
	<?php echo CHtml::encode($data->Rol); ?>
	<br />


</div>