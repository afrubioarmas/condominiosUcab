<?php
/* @var $this CartaconsultaController */
/* @var $model Cartaconsulta */

$this->breadcrumbs=array(
	'Cartaconsultas'=>array('index'),
	$model->idCartaConsulta,
);

$this->menu=array(
	array('label'=>'List Cartaconsulta', 'url'=>array('index')),
	array('label'=>'Create Cartaconsulta', 'url'=>array('create')),
	array('label'=>'Update Cartaconsulta', 'url'=>array('update', 'id'=>$model->idCartaConsulta)),
	array('label'=>'Delete Cartaconsulta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCartaConsulta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cartaconsulta', 'url'=>array('admin')),
);
?>

<h1>View Cartaconsulta #<?php echo $model->idCartaConsulta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCartaConsulta',
		'Fecha',
		'Motivo',
		'Propuesta',
	),
)); ?>
