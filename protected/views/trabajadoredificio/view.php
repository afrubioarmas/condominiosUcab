<?php
/* @var $this TrabajadoredificioController */
/* @var $model Trabajadoredificio */

$this->breadcrumbs=array(
	'Trabajadoredificios'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Trabajadoredificio', 'url'=>array('index')),
	array('label'=>'Create Trabajadoredificio', 'url'=>array('create')),
	array('label'=>'Update Trabajadoredificio', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Trabajadoredificio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajadoredificio', 'url'=>array('admin')),
);
?>

<h1>View Trabajadoredificio #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Apellido',
		'ClaveLogueo',
		'Rol',
	),
)); ?>
