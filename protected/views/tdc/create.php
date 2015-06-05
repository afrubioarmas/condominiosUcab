<?php
/* @var $this TdcController */
/* @var $model Tdc */

$this->breadcrumbs=array(
	'Tdcs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tdc', 'url'=>array('index')),
	array('label'=>'Manage Tdc', 'url'=>array('admin')),
);
?>

<h1>Create Tdc</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>