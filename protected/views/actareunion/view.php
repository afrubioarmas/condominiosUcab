<?php
/* @var $this ActareunionController */
/* @var $model Actareunion */

$this->breadcrumbs=array(
	'Actareunions'=>array('index'),
	$model->idActaReunion,
);

$this->menu=array(
	array('label'=>'List Actareunion', 'url'=>array('index')),
	array('label'=>'Create Actareunion', 'url'=>array('create')),
	array('label'=>'Update Actareunion', 'url'=>array('update', 'id'=>$model->idActaReunion)),
	array('label'=>'Delete Actareunion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idActaReunion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Actareunion', 'url'=>array('admin')),
);
?>

<h1>View Actareunion #<?php echo $model->idActaReunion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idActaReunion',
		'Fecha',
		'Tipo',
		'Motivo',
		'Llamado',
		'Edificio_RIF',
		'Oficina_idOficina',
		'JuntaCondominio_idJuntaCondominio',
		'TrabajadorEmpresa_Cedula',
	),
)); ?>
