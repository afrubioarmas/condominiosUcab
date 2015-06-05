<?php
/* @var $this EfectivoController */
/* @var $model Efectivo */

$this->breadcrumbs=array(
	'Efectivos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Efectivo', 'url'=>array('index')),
	array('label'=>'Manage Efectivo', 'url'=>array('admin')),
);
?>

<h1>Create Efectivo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>