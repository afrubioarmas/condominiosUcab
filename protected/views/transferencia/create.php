<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */

$this->breadcrumbs=array(
	'Transferencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Transferencia', 'url'=>array('index')),
	array('label'=>'Manage Transferencia', 'url'=>array('admin')),
);
?>

<h1>Create Transferencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>