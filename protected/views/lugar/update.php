<?php
/* @var $this LugarController */
/* @var $model Lugar */

$this->breadcrumbs=array(
	'Lugars'=>array('index'),
	$model->idLugar=>array('view','id'=>$model->idLugar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lugar', 'url'=>array('index')),
	array('label'=>'Create Lugar', 'url'=>array('create')),
	array('label'=>'View Lugar', 'url'=>array('view', 'id'=>$model->idLugar)),
	array('label'=>'Manage Lugar', 'url'=>array('admin')),
);
?>

<h1>Update Lugar <?php echo $model->idLugar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>