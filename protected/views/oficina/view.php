<?php
/* @var $this OficinaController */
/* @var $model Oficina */

$this->breadcrumbs=array(
	'Oficinas'=>array('index'),
	$model->idOficina,
);

$this->menu=array(
	array('label'=>'List Oficina', 'url'=>array('index')),
	array('label'=>'Create Oficina', 'url'=>array('create')),
	array('label'=>'Update Oficina', 'url'=>array('update', 'id'=>$model->idOficina)),
	array('label'=>'Delete Oficina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOficina),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Oficina', 'url'=>array('admin')),
);
?>

<h1>View Oficina #<?php echo $model->idOficina; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOficina',
		'Lugar_idLugar',
		'Empresa_RIF',
	),
)); ?>
