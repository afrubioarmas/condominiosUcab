<?php
/* @var $this InspeccionmantenimientoController */
/* @var $model Inspeccionmantenimiento */

$this->breadcrumbs=array(
	'Inspeccionmantenimientos'=>array('index'),
	$model->idInspeccionMantenimiento=>array('view','id'=>$model->idInspeccionMantenimiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inspeccionmantenimiento', 'url'=>array('index')),
	array('label'=>'Create Inspeccionmantenimiento', 'url'=>array('create')),
	array('label'=>'View Inspeccionmantenimiento', 'url'=>array('view', 'id'=>$model->idInspeccionMantenimiento)),
	array('label'=>'Manage Inspeccionmantenimiento', 'url'=>array('admin')),
);
?>

<h1>Update Inspeccionmantenimiento <?php echo $model->idInspeccionMantenimiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'areascomun'=>$areascomun,'trabajadoredificio'=>$trabajadoredificio)); ?>