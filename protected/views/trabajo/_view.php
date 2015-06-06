<?php
/* @var $this TrabajoController */
/* @var $data Trabajo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTrabajo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTrabajo), array('view', 'id'=>$data->idTrabajo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aprobado')); ?>:</b>
	<?php echo CHtml::encode($data->Aprobado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AltoValor')); ?>:</b>
	<?php echo CHtml::encode($data->AltoValor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagoParcial')); ?>:</b>
	<?php echo CHtml::encode($data->PagoParcial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mejora')); ?>:</b>
	<?php echo CHtml::encode($data->Mejora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaExtraordinaria_idAsambleaExtraordinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaExtraordinaria_idAsambleaExtraordinaria); ?>
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('CartaConsulta_idCartaConsulta')); ?>:</b>
	<?php echo CHtml::encode($data->CartaConsulta_idCartaConsulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servicio_idServicio')); ?>:</b>
	<?php echo CHtml::encode($data->Servicio_idServicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servicio_Proveedor_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Servicio_Proveedor_RIF); ?>
	<br />

	*/ ?>

</div>