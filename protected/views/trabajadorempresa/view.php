<?php
/* @var $this TrabajadorempresaController */
/* @var $model Trabajadorempresa */

$this->breadcrumbs=array(
	'Trabajadorempresas'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Trabajadorempresa', 'url'=>array('index')),
	array('label'=>'Create Trabajadorempresa', 'url'=>array('create')),
	array('label'=>'Update Trabajadorempresa', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Trabajadorempresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajadorempresa', 'url'=>array('admin')),
);
?>

<h1>View Trabajadorempresa #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Apellido',
		'ClaveLogueo',
		'Rol',
		'Contrato',
		'Oficina_idOficina',
	),
)); ?>
