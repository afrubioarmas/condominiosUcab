<?php
/* @var $this ChequeController */
/* @var $data Cheque */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroCheque')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->numeroCheque), array('view', 'id'=>$data->numeroCheque)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Endosable')); ?>:</b>
	<?php echo CHtml::encode($data->Endosable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CuentaBancaria_NumeroDeCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->CuentaBancaria_NumeroDeCuenta); ?>
	<br />


</div>