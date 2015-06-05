<?php
/* @var $this NotificacionapartamentoController */
/* @var $data Notificacionapartamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNotificacionApartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNotificacionApartamento), array('view', 'id'=>$data->idNotificacionApartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaOrdinaria_idAsambleaOrdinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaOrdinaria_idAsambleaOrdinaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaExtraordinaria_idAsambleaExtraordinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaExtraordinaria_idAsambleaExtraordinaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Transaccion_idTransaccion')); ?>:</b>
	<?php echo CHtml::encode($data->Transaccion_idTransaccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apartamento_idApartamento')); ?>:</b>
	<?php echo CHtml::encode($data->Apartamento_idApartamento); ?>
	<br />


</div>