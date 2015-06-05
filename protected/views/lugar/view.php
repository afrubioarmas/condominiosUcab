<?php
/* @var $this LugarController */
/* @var $model Lugar */

$this->breadcrumbs=array(
	'Lugars'=>array('index'),
	$model->idLugar,
);

$this->menu=array(
	array('label'=>'List Lugar', 'url'=>array('index')),
	array('label'=>'Create Lugar', 'url'=>array('create')),
	array('label'=>'Update Lugar', 'url'=>array('update', 'id'=>$model->idLugar)),
	array('label'=>'Delete Lugar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idLugar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lugar', 'url'=>array('admin')),
);
?>

<h1>View Lugar #<?php echo $model->idLugar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idLugar',
		'Tipo',
		'Nombre',
		'Lugar_idLugar',
	),
)); ?>
