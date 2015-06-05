<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */

$this->breadcrumbs=array(
	'Transferencias'=>array('index'),
	$model->idTransferencia,
);

$this->menu=array(
	array('label'=>'List Transferencia', 'url'=>array('index')),
	array('label'=>'Create Transferencia', 'url'=>array('create')),
	array('label'=>'Update Transferencia', 'url'=>array('update', 'id'=>$model->idTransferencia)),
	array('label'=>'Delete Transferencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTransferencia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transferencia', 'url'=>array('admin')),
);
?>

<h1>View Transferencia #<?php echo $model->idTransferencia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTransferencia',
		'CuentaBancaria_NumeroDeCuenta',
	),
)); ?>
