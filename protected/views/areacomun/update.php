<?php
/* @var $this AreacomunController */
/* @var $model Areacomun */

$this->breadcrumbs=array(
	'Areacomuns'=>array('index'),
	$model->idAreaComun=>array('view','id'=>$model->idAreaComun),
	'Update',
);

$this->menu=array(
	array('label'=>'List Areacomun', 'url'=>array('index')),
	array('label'=>'Create Areacomun', 'url'=>array('create')),
	array('label'=>'View Areacomun', 'url'=>array('view', 'id'=>$model->idAreaComun)),
	array('label'=>'Manage Areacomun', 'url'=>array('admin')),
);
?>

<h1>Update Areacomun <?php echo $model->idAreaComun; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>