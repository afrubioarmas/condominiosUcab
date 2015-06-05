<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->idHorario,
);

$this->menu=array(
	array('label'=>'List Horario', 'url'=>array('index')),
	array('label'=>'Create Horario', 'url'=>array('create')),
	array('label'=>'Update Horario', 'url'=>array('update', 'id'=>$model->idHorario)),
	array('label'=>'Delete Horario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idHorario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Horario', 'url'=>array('admin')),
);
?>

<h1>View Horario #<?php echo $model->idHorario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idHorario',
		'HoraInicio',
		'HoraFin',
		'Dia',
		'Oficina_idOficina',
		'Oficina_Empresa_RIF',
		'TrabajadorEmpresa_Cedula',
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
		'ActaReunion_idActaReunion',
		'ActaReunion_JuntaCondominio_idJuntaCondominio',
		'ActaReunion_JuntaCondominio_Edificio_RIF',
		'ActaReunion_TrabajadorEmpresa_Cedula',
		'AsambleaOrdinaria_idAsambleaOrdinaria',
		'AsambleaExtraordinaria_idAsambleaExtraordinaria',
	),
)); ?>
