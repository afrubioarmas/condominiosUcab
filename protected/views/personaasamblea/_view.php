<?php
/* @var $this PersonaasambleaController */
/* @var $data Personaasamblea */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersonaAsamblea')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPersonaAsamblea), array('view', 'id'=>$data->idPersonaAsamblea)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->Aprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asistencia')); ?>:</b>
	<?php echo CHtml::encode($data->Asistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaExtraordinaria_idAsambleaExtraordinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaExtraordinaria_idAsambleaExtraordinaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AsambleaOrdinaria_idAsambleaOrdinaria')); ?>:</b>
	<?php echo CHtml::encode($data->AsambleaOrdinaria_idAsambleaOrdinaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propietario_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Propietario_Cedula); ?>
	<br />


</div>