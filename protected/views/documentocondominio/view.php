<?php
/* @var $this DocumentocondominioController */
/* @var $model Documentocondominio */

$this->breadcrumbs=array(
	'Documentocondominios'=>array('index'),
	$model->idDocumentoCondominio,
);

$this->menu=array(
	array('label'=>'List Documentocondominio', 'url'=>array('index')),
	array('label'=>'Create Documentocondominio', 'url'=>array('create')),
	array('label'=>'Update Documentocondominio', 'url'=>array('update', 'id'=>$model->idDocumentoCondominio)),
	array('label'=>'Delete Documentocondominio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDocumentoCondominio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documentocondominio', 'url'=>array('admin')),
);
?>

<h1>View Documentocondominio #<?php echo $model->idDocumentoCondominio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDocumentoCondominio',
		'Cargo',
		'CedulaSuplente',
		'FechaInicio',
		'FechaFin',
		'Propietario_Cedula',
		'JuntaCondominio_idJuntaCondominio',
	),
)); ?>
