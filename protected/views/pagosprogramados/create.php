<?php
/* @var $this PagosprogramadosController */
/* @var $model Pagosprogramados */

$this->breadcrumbs=array(
	'Pagosprogramadoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pagosprogramados', 'url'=>array('index')),
	array('label'=>'Manage Pagosprogramados', 'url'=>array('admin')),
);
?>

<h1>Create Pagosprogramados</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'edificios'=>$edificios)); ?>