<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->RIF,
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'Update Proveedor', 'url'=>array('update', 'id'=>$model->RIF)),
	array('label'=>'Delete Proveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RIF),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>View Proveedor #<?php echo $model->RIF; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RIF',
		'Nombre',
	),
)); ?>
