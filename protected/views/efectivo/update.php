<?php
/* @var $this EfectivoController */
/* @var $model Efectivo */

$this->breadcrumbs=array(
	'Efectivos'=>array('index'),
	$model->idEfectivo=>array('view','id'=>$model->idEfectivo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Efectivo', 'url'=>array('index')),
	array('label'=>'Create Efectivo', 'url'=>array('create')),
	array('label'=>'View Efectivo', 'url'=>array('view', 'id'=>$model->idEfectivo)),
	array('label'=>'Manage Efectivo', 'url'=>array('admin')),
);
?>

<h1>Update Efectivo <?php echo $model->idEfectivo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>