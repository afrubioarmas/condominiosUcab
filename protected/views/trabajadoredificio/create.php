<?php
/* @var $this TrabajadoredificioController */
/* @var $model Trabajadoredificio */

$this->breadcrumbs=array(
	'Trabajadoredificios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trabajadoredificio', 'url'=>array('index')),
	array('label'=>'Manage Trabajadoredificio', 'url'=>array('admin')),
);
?>

<h1>Create Trabajadoredificio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>