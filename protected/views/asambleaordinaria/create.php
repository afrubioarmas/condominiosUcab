<?php
/* @var $this AsambleaordinariaController */
/* @var $model Asambleaordinaria */

$this->breadcrumbs=array(
	'Asambleaordinarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Asambleaordinaria', 'url'=>array('index')),
	array('label'=>'Manage Asambleaordinaria', 'url'=>array('admin')),
);
?>

<h1>Create Asambleaordinaria</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'trabajadores'=>$trabajadores)); ?>