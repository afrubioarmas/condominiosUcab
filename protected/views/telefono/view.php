<?php
/* @var $this TelefonoController */
/* @var $model Telefono */

$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	$model->numeroTelefono,
);

$this->menu=array(
	array('label'=>'List Telefono', 'url'=>array('index')),
	array('label'=>'Create Telefono', 'url'=>array('create')),
	array('label'=>'Update Telefono', 'url'=>array('update', 'id'=>$model->numeroTelefono)),
	array('label'=>'Delete Telefono', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numeroTelefono),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Telefono', 'url'=>array('admin')),
);
?>

<h1>View Telefono #<?php echo $model->numeroTelefono; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numeroTelefono',
		'Oficina_idOficina',
		'Oficina_Empresa_RIF',
		'Propietario_Cedula',
		'TrabajadorEdificio_Cedula',
		'TrabajadorEmpresa_Cedula',
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
	),
)); ?>
