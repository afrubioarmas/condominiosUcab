<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'Trabajos'=>array('index'),
	$model->idTrabajo=>array('view','id'=>$model->idTrabajo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajo', 'url'=>array('index')),
	array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'View Trabajo', 'url'=>array('view', 'id'=>$model->idTrabajo)),
	array('label'=>'Manage Trabajo', 'url'=>array('admin')),
);
?>

<h1>Update Trabajo <?php echo $model->idTrabajo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'servicios'=>$servicios)); ?>