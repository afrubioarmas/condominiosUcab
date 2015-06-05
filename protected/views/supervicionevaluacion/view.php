<?php
/* @var $this SupervicionevaluacionController */
/* @var $model Supervicionevaluacion */

$this->breadcrumbs=array(
	'Supervicionevaluacions'=>array('index'),
	$model->idSupervicionEvaluacion,
);

$this->menu=array(
	array('label'=>'List Supervicionevaluacion', 'url'=>array('index')),
	array('label'=>'Create Supervicionevaluacion', 'url'=>array('create')),
	array('label'=>'Update Supervicionevaluacion', 'url'=>array('update', 'id'=>$model->idSupervicionEvaluacion)),
	array('label'=>'Delete Supervicionevaluacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSupervicionEvaluacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supervicionevaluacion', 'url'=>array('admin')),
);
?>

<h1>View Supervicionevaluacion #<?php echo $model->idSupervicionEvaluacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSupervicionEvaluacion',
		'Nota',
		'Descripcion',
		'Fecha',
		'TrabajadorEdificio_Cedula',
		'TrabajadorEmpresa_Cedula',
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
	),
)); ?>
