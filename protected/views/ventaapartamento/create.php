<?php
/* @var $this VentaapartamentoController */
/* @var $model Ventaapartamento */

$this->breadcrumbs=array(
	'Ventaapartamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ventaapartamento', 'url'=>array('index')),
	array('label'=>'Manage Ventaapartamento', 'url'=>array('admin')),
);
?>

<h1>Create Ventaapartamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>