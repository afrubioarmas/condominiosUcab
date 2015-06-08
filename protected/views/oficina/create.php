<?php
/* @var $this OficinaController */
/* @var $model Oficina */

$this->breadcrumbs=array(
	'Oficinas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Oficina', 'url'=>array('index')),
	array('label'=>'Manage Oficina', 'url'=>array('admin')),
);
?>

<h1>Create Oficina</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'empresa'=>$empresa,'lugar'=>$lugar)); ?>