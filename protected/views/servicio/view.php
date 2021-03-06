<?php
/* @var $this ServicioController */
/* @var $model Servicio */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	$model->idServicio,
);

$this->menu=array(
	array('label'=>'List Servicio', 'url'=>array('index')),
	array('label'=>'Create Servicio', 'url'=>array('create')),
	array('label'=>'Update Servicio', 'url'=>array('update', 'id'=>$model->idServicio)),
	array('label'=>'Delete Servicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idServicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicio', 'url'=>array('admin')),
);
?>

<h1>View Servicio #<?php echo $model->idServicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idServicio',
		'Descripcion',
		'Monto',
		'Proveedor_RIF',
	),
)); ?>
