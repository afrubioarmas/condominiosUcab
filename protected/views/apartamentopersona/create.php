<?php
/* @var $this ApartamentopersonaController */
/* @var $model Apartamentopersona */

$this->breadcrumbs=array(
	'Apartamentopersonas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Apartamentopersona', 'url'=>array('index')),
	array('label'=>'Manage Apartamentopersona', 'url'=>array('admin')),
);
?>

<h1>Create Apartamentopersona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>