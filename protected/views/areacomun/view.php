<?php
/* @var $this AreacomunController */
/* @var $model Areacomun */

$this->breadcrumbs=array(
	'Areacomuns'=>array('index'),
	$model->idAreaComun,
);

$this->menu=array(
	array('label'=>'List Areacomun', 'url'=>array('index')),
	array('label'=>'Create Areacomun', 'url'=>array('create')),
	array('label'=>'Update Areacomun', 'url'=>array('update', 'id'=>$model->idAreaComun)),
	array('label'=>'Delete Areacomun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAreaComun),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Areacomun', 'url'=>array('admin')),
);
?>

<h1>View Areacomun #<?php echo $model->idAreaComun; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAreaComun',
		'Descripcion',
		'Edificio_RIF',
	),
)); ?>
