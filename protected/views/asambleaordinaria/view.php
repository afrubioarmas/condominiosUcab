<?php
/* @var $this AsambleaordinariaController */
/* @var $model Asambleaordinaria */

$this->breadcrumbs=array(
	'Asambleaordinarias'=>array('index'),
	$model->idAsambleaOrdinaria,
);

$this->menu=array(
	array('label'=>'List Asambleaordinaria', 'url'=>array('index')),
	array('label'=>'Create Asambleaordinaria', 'url'=>array('create')),
	array('label'=>'Update Asambleaordinaria', 'url'=>array('update', 'id'=>$model->idAsambleaOrdinaria)),
	array('label'=>'Delete Asambleaordinaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAsambleaOrdinaria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asambleaordinaria', 'url'=>array('admin')),
);
?>

<h1>View Asambleaordinaria #<?php echo $model->idAsambleaOrdinaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAsambleaOrdinaria',
		'Fecha',
		'Motivo',
		'PeriodoEnDias',
		'TrabajadorEmpresa_Cedula',
	),
)); ?>
