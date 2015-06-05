<?php
/* @var $this CuentabancariaController */
/* @var $model Cuentabancaria */

$this->breadcrumbs=array(
	'Cuentabancarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cuentabancaria', 'url'=>array('index')),
	array('label'=>'Manage Cuentabancaria', 'url'=>array('admin')),
);
?>

<h1>Create Cuentabancaria</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'data3'=>$data3)); ?>