<?php
/* @var $this PersonaasambleaController */
/* @var $model Personaasamblea */

$this->breadcrumbs=array(
	'Personaasambleas'=>array('index'),
	$model->idPersonaAsamblea,
);

$this->menu=array(
	array('label'=>'List Personaasamblea', 'url'=>array('index')),
	array('label'=>'Create Personaasamblea', 'url'=>array('create')),
	array('label'=>'Update Personaasamblea', 'url'=>array('update', 'id'=>$model->idPersonaAsamblea)),
	array('label'=>'Delete Personaasamblea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPersonaAsamblea),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personaasamblea', 'url'=>array('admin')),
);
?>

<h1>View Personaasamblea #<?php echo $model->idPersonaAsamblea; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPersonaAsamblea',
		'Aprobacion',
		'Asistencia',
		'AsambleaExtraordinaria_idAsambleaExtraordinaria',
		'AsambleaOrdinaria_idAsambleaOrdinaria',
		'Propietario_Cedula',
	),
)); ?>
