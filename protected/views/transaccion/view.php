<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->idTransaccion,
);

$this->menu=array(
	array('label'=>'List Transaccion', 'url'=>array('index')),
	array('label'=>'Create Transaccion', 'url'=>array('create')),
	array('label'=>'Update Transaccion', 'url'=>array('update', 'id'=>$model->idTransaccion)),
	array('label'=>'Delete Transaccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTransaccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaccion', 'url'=>array('admin')),
);
?>

<h1>View Transaccion #<?php echo $model->idTransaccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTransaccion',
		'Monto',
		'Fecha',
		'Aprobado',
		'Descripcion',
		'Ingreso',
		'TDC_NumeroTDC',
		'Transferencia_idTransferencia',
		'Efectivo_idEfectivo',
		'Cheque_numeroCheque',
		'Fondo_idFondo',
		'PagosProgramados_idPagosProgramados',
		'Edificio_RIF',
		'Propietario_Cedula',
		'Trabajo_idTrabajo',
	),
)); ?>
