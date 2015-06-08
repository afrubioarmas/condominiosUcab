<?php
/* @var $this OficinaController */
/* @var $model Oficina */

$this->breadcrumbs=array(
	'Oficinas'=>array('index'),
	$model->idOficina=>array('view','id'=>$model->idOficina),
	'Update',
);

$this->menu=array(
	array('label'=>'List Oficina', 'url'=>array('index')),
	array('label'=>'Create Oficina', 'url'=>array('create')),
	array('label'=>'View Oficina', 'url'=>array('view', 'id'=>$model->idOficina)),
	array('label'=>'Manage Oficina', 'url'=>array('admin')),
);
?>

<h1>Update Oficina <?php echo $model->idOficina; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'empresa'=>$empresa,'lugar'=>$lugar)); ?>