<?php
/* @var $this EfectivoController */
/* @var $data Efectivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEfectivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEfectivo), array('view', 'id'=>$data->idEfectivo)); ?>
	<br />


</div>