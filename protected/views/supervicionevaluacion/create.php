<?php
/* @var $this SupervicionevaluacionController */
/* @var $model Supervicionevaluacion */

$this->breadcrumbs=array(
	'Supervicionevaluacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Supervicionevaluacion', 'url'=>array('index')),
	array('label'=>'Manage Supervicionevaluacion', 'url'=>array('admin')),
);
?>

<h1>Create Supervicionevaluacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'trabajadoredificio'=>$trabajadoredificio,'trabajadores'=>$trabajadores)); ?>