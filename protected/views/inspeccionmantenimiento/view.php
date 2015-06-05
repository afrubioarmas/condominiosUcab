<?php
/* @var $this InspeccionmantenimientoController */
/* @var $model Inspeccionmantenimiento */

$this->breadcrumbs=array(
	'Inspeccionmantenimientos'=>array('index'),
	$model->idInspeccionMantenimiento,
);

$this->menu=array(
	array('label'=>'List Inspeccionmantenimiento', 'url'=>array('index')),
	array('label'=>'Create Inspeccionmantenimiento', 'url'=>array('create')),
	array('label'=>'Update Inspeccionmantenimiento', 'url'=>array('update', 'id'=>$model->idInspeccionMantenimiento)),
	array('label'=>'Delete Inspeccionmantenimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idInspeccionMantenimiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inspeccionmantenimiento', 'url'=>array('admin')),
);
?>

<h1>View Inspeccionmantenimiento #<?php echo $model->idInspeccionMantenimiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idInspeccionMantenimiento',
		'Descripcion',
		'Inspeccion',
		'Mantenimiento',
		'Fecha',
		'AreaComun_idAreaComun',
		'TrabajadorEdificio_Cedula',
	),
)); ?>
