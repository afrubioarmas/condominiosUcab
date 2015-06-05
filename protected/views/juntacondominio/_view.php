<?php
/* @var $this JuntacondominioController */
/* @var $data Juntacondominio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJuntaCondominio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idJuntaCondominio), array('view', 'id'=>$data->idJuntaCondominio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edificio_RIF')); ?>:</b>
	<?php echo CHtml::encode($data->Edificio_RIF); ?>
	<br />


</div>