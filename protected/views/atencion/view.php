<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->idAtencion,
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'Update Atencion', 'url'=>array('update', 'id'=>$model->idAtencion)),
	array('label'=>'Delete Atencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAtencion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>View Atencion #<?php echo $model->idAtencion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAtencion',
		'Descripcion',
		'Estatus',
		'Razon',
		'Telefono',
		'Correo',
		'Oficina',
		'JuntaCondominio_idJuntaCondominio',
		'JuntaCondominio_Edificio_RIF',
		'Propietario_Cedula',
		'Oficina_idOficina',
	),
)); ?>
