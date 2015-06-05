<?php
/* @var $this CuentabancariaController */
/* @var $model Cuentabancaria */

$this->breadcrumbs=array(
	'Cuentabancarias'=>array('index'),
	$model->NumeroDeCuenta,
);

$this->menu=array(
	array('label'=>'List Cuentabancaria', 'url'=>array('index')),
	array('label'=>'Create Cuentabancaria', 'url'=>array('create')),
	array('label'=>'Update Cuentabancaria', 'url'=>array('update', 'id'=>$model->NumeroDeCuenta)),
	array('label'=>'Delete Cuentabancaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NumeroDeCuenta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cuentabancaria', 'url'=>array('admin')),
);
?>

<h1>View Cuentabancaria #<?php echo $model->NumeroDeCuenta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NumeroDeCuenta',
		'Banco',
		'Oficina_idOficina',
	),
)); ?>
