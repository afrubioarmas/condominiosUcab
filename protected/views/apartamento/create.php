<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */

$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Apartamento', 'url'=>array('index')),
	array('label'=>'Manage Apartamento', 'url'=>array('admin')),
);
?>

<h1>Create Apartamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>