<?php
/* @var $this EfectivoController */
/* @var $model Efectivo */

$this->breadcrumbs=array(
	'Efectivos'=>array('index'),
	$model->idEfectivo,
);

$this->menu=array(
	array('label'=>'List Efectivo', 'url'=>array('index')),
	array('label'=>'Create Efectivo', 'url'=>array('create')),
	array('label'=>'Update Efectivo', 'url'=>array('update', 'id'=>$model->idEfectivo)),
	array('label'=>'Delete Efectivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEfectivo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Efectivo', 'url'=>array('admin')),
);
?>

<h1>View Efectivo #<?php echo $model->idEfectivo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEfectivo',
	),
)); ?>
