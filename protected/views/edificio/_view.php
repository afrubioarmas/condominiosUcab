<?php
/* @var $this EdificioController */
/* @var $data Edificio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RIF')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RIF), array('view', 'id'=>$data->RIF)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InteresMora')); ?>:</b>
	<?php echo CHtml::encode($data->InteresMora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asistencia1Reunion')); ?>:</b>
	<?php echo CHtml::encode($data->Asistencia1Reunion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asistencia2Reunion')); ?>:</b>
	<?php echo CHtml::encode($data->Asistencia2Reunion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DerechoVoto')); ?>:</b>
	<?php echo CHtml::encode($data->DerechoVoto); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Pisos')); ?>:</b>
	<?php echo CHtml::encode($data->Pisos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApartamentosPiso')); ?>:</b>
	<?php echo CHtml::encode($data->ApartamentosPiso); ?>
	<br />
        
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Lugar_idLugar')); ?>:</b>
	<?php echo CHtml::encode($data->Lugar_idLugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrabajadorEmpresa_Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->TrabajadorEmpresa_Cedula); ?>
	<br />


	*/ ?>

</div>