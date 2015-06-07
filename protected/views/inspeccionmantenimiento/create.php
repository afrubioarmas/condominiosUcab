<?php
/* @var $this InspeccionmantenimientoController */
/* @var $model Inspeccionmantenimiento */

$this->breadcrumbs=array(
	'Inspeccionmantenimientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inspeccionmantenimiento', 'url'=>array('index')),
	array('label'=>'Manage Inspeccionmantenimiento', 'url'=>array('admin')),
);
?>

<h1>Create Inspeccionmantenimiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'areascomun'=>$areascomun)); ?>