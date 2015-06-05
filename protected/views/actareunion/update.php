<?php
/* @var $this ActareunionController */
/* @var $model Actareunion */

$this->breadcrumbs=array(
	'Actareunions'=>array('index'),
	$model->idActaReunion=>array('view','id'=>$model->idActaReunion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actareunion', 'url'=>array('index')),
	array('label'=>'Create Actareunion', 'url'=>array('create')),
	array('label'=>'View Actareunion', 'url'=>array('view', 'id'=>$model->idActaReunion)),
	array('label'=>'Manage Actareunion', 'url'=>array('admin')),
);
?>

<h1>Update Actareunion <?php echo $model->idActaReunion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>