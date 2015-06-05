<?php
/* @var $this CorreoelectronicoController */
/* @var $model Correoelectronico */

$this->breadcrumbs=array(
	'Correoelectronicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Correoelectronico', 'url'=>array('index')),
	array('label'=>'Manage Correoelectronico', 'url'=>array('admin')),
);
?>

<h1>Create Correoelectronico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>