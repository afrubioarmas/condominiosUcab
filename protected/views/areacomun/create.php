<?php
/* @var $this AreacomunController */
/* @var $model Areacomun */

$this->breadcrumbs=array(
	'Areacomuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Areacomun', 'url'=>array('index')),
	array('label'=>'Manage Areacomun', 'url'=>array('admin')),
);
?>

<h1>Create Areacomun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>