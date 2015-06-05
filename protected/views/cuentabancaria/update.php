<?php
/* @var $this CuentabancariaController */
/* @var $model Cuentabancaria */

$this->breadcrumbs=array(
	'Cuentabancarias'=>array('index'),
	$model->NumeroDeCuenta=>array('view','id'=>$model->NumeroDeCuenta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cuentabancaria', 'url'=>array('index')),
	array('label'=>'Create Cuentabancaria', 'url'=>array('create')),
	array('label'=>'View Cuentabancaria', 'url'=>array('view', 'id'=>$model->NumeroDeCuenta)),
	array('label'=>'Manage Cuentabancaria', 'url'=>array('admin')),
);
?>

<h1>Update Cuentabancaria <?php echo $model->NumeroDeCuenta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'data3'=>$data3)); ?>