<?php
/* @var $this CartaconsultaController */
/* @var $model Cartaconsulta */

$this->breadcrumbs=array(
	'Cartaconsultas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cartaconsulta', 'url'=>array('index')),
	array('label'=>'Manage Cartaconsulta', 'url'=>array('admin')),
);
?>

<h1>Create Cartaconsulta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>