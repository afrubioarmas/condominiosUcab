<?php
/* @var $this SupervicionevaluacionController */
/* @var $model Supervicionevaluacion */

$this->breadcrumbs=array(
	'Supervicionevaluacions'=>array('index'),
	$model->idSupervicionEvaluacion=>array('view','id'=>$model->idSupervicionEvaluacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supervicionevaluacion', 'url'=>array('index')),
	array('label'=>'Create Supervicionevaluacion', 'url'=>array('create')),
	array('label'=>'View Supervicionevaluacion', 'url'=>array('view', 'id'=>$model->idSupervicionEvaluacion)),
	array('label'=>'Manage Supervicionevaluacion', 'url'=>array('admin')),
);
?>

<h1>Update Supervicionevaluacion <?php echo $model->idSupervicionEvaluacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'trabajadoredificio'=>$trabajadoredificio,'trabajadores'=>$trabajadores)); ?>