<?php
/* @var $this CartaconsultaController */
/* @var $data Cartaconsulta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCartaConsulta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCartaConsulta), array('view', 'id'=>$data->idCartaConsulta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Motivo')); ?>:</b>
	<?php echo CHtml::encode($data->Motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propuesta')); ?>:</b>
	<?php echo CHtml::encode($data->Propuesta); ?>
	<br />


</div>