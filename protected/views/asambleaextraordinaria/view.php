<?php
/* @var $this AsambleaextraordinariaController */
/* @var $model Asambleaextraordinaria */

$this->breadcrumbs=array(
	'Asambleaextraordinarias'=>array('index'),
	$model->idAsambleaExtraordinaria,
);

$this->menu=array(
	array('label'=>'List Asambleaextraordinaria', 'url'=>array('index')),
	array('label'=>'Create Asambleaextraordinaria', 'url'=>array('create')),
	array('label'=>'Update Asambleaextraordinaria', 'url'=>array('update', 'id'=>$model->idAsambleaExtraordinaria)),
	array('label'=>'Delete Asambleaextraordinaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAsambleaExtraordinaria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asambleaextraordinaria', 'url'=>array('admin')),
);
?>

<h1>View Asambleaextraordinaria #<?php echo $model->idAsambleaExtraordinaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAsambleaExtraordinaria',
		'Fecha',
		'Motivo',
		'Propuesta',
		'TrabajadorEmpresa_Cedula',
	),
)); ?>
