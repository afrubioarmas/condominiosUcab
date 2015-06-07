<?php
/* @var $this AsambleaextraordinariaController */
/* @var $model Asambleaextraordinaria */

$this->breadcrumbs=array(
	'Asambleaextraordinarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Asambleaextraordinaria', 'url'=>array('index')),
	array('label'=>'Manage Asambleaextraordinaria', 'url'=>array('admin')),
);
?>

<h1>Create Asambleaextraordinaria</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'trabajadores'=>$trabajadores)); ?>