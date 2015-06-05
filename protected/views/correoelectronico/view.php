<?php
/* @var $this CorreoelectronicoController */
/* @var $model Correoelectronico */

$this->breadcrumbs=array(
	'Correoelectronicos'=>array('index'),
	$model->idCorrecoElectronico,
);

$this->menu=array(
	array('label'=>'List Correoelectronico', 'url'=>array('index')),
	array('label'=>'Create Correoelectronico', 'url'=>array('create')),
	array('label'=>'Update Correoelectronico', 'url'=>array('update', 'id'=>$model->idCorrecoElectronico)),
	array('label'=>'Delete Correoelectronico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCorrecoElectronico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Correoelectronico', 'url'=>array('admin')),
);
?>

<h1>View Correoelectronico #<?php echo $model->idCorrecoElectronico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCorrecoElectronico',
		'Direccion',
		'Oficina_idOficina',
		'Oficina_Empresa_RIF',
		'Propietario_Cedula',
		'TrabajadorEdificio_Cedula',
		'TrabajadorEmpresa_Cedula',
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
	),
)); ?>
