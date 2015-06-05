<?php
/* @var $this ApartamentopersonaController */
/* @var $data Apartamentopersona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idApartamentoPersona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idApartamentoPersona), array('view', 'id'=>$data->idApartamentoPersona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apartamento_idApartamento')); ?>:</b>
	<?php echo CHtml::encode($data->Apartamento_idApartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Propietario_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Propietario_Cedula); ?>
	<br />


</div>