<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->idContrato,
);

$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index')),
	array('label'=>'Create Contrato', 'url'=>array('create')),
	array('label'=>'Update Contrato', 'url'=>array('update', 'id'=>$model->idContrato)),
	array('label'=>'Delete Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idContrato),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contrato', 'url'=>array('admin')),
);
?>

<h1>View Contrato #<?php echo $model->idContrato; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idContrato',
		'FechaInicio',
		'FechaFin',
		'Sueldo',
		'Edificio_RIF',
		'TrabajadorEdificio_Cedula',
	),
)); ?>
