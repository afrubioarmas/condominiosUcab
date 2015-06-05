<?php
/* @var $this VentaapartamentoController */
/* @var $model Ventaapartamento */

$this->breadcrumbs=array(
	'Ventaapartamentos'=>array('index'),
	$model->idVentaApartamento,
);

$this->menu=array(
	array('label'=>'List Ventaapartamento', 'url'=>array('index')),
	array('label'=>'Create Ventaapartamento', 'url'=>array('create')),
	array('label'=>'Update Ventaapartamento', 'url'=>array('update', 'id'=>$model->idVentaApartamento)),
	array('label'=>'Delete Ventaapartamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVentaApartamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ventaapartamento', 'url'=>array('admin')),
);
?>

<h1>View Ventaapartamento #<?php echo $model->idVentaApartamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVentaApartamento',
		'Monto',
		'Fecha',
		'Comision',
		'Apartamento_idApartamento',
		'TrabajadorEmpresa_Cedula',
	),
)); ?>
