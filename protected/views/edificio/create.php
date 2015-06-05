<?php
/* @var $this EdificioController */
/* @var $model Edificio */

$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Edificio', 'url'=>array('index')),
	array('label'=>'Manage Edificio', 'url'=>array('admin')),
);
?>

<h1>Create Edificio</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'data3'=>$data3,'trabajadores'=>$trabajadores)); ?>