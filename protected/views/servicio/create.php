<?php
/* @var $this ServicioController */
/* @var $model Servicio */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Servicio', 'url'=>array('index')),
	array('label'=>'Manage Servicio', 'url'=>array('admin')),
);
?>

<h1>Create Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'proveedores'=>$proveedores)); ?>