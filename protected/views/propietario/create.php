<?php
/* @var $this PropietarioController */
/* @var $model Propietario */

$this->breadcrumbs=array(
	'Propietarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Propietario', 'url'=>array('index')),
	array('label'=>'Manage Propietario', 'url'=>array('admin')),
);
?>

<h1>Create Propietario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>