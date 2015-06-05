<?php
/* @var $this FondoController */
/* @var $model Fondo */

$this->breadcrumbs=array(
	'Fondos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fondo', 'url'=>array('index')),
	array('label'=>'Manage Fondo', 'url'=>array('admin')),
);
?>

<h1>Create Fondo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>