<?php
/* @var $this TrabajadorempresaController */
/* @var $model Trabajadorempresa */

$this->breadcrumbs=array(
	'Trabajadorempresas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trabajadorempresa', 'url'=>array('index')),
	array('label'=>'Manage Trabajadorempresa', 'url'=>array('admin')),
);
?>

<h1>Create Trabajadorempresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'oficinas'=>$oficinas)); ?>