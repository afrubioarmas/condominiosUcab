<?php
/* @var $this TrabajadoredificioController */
/* @var $model Trabajadoredificio */

$this->breadcrumbs=array(
	'Trabajadoredificios'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajadoredificio', 'url'=>array('index')),
	array('label'=>'Create Trabajadoredificio', 'url'=>array('create')),
	array('label'=>'View Trabajadoredificio', 'url'=>array('view', 'id'=>$model->Cedula)),
	array('label'=>'Manage Trabajadoredificio', 'url'=>array('admin')),
);
?>

<h1>Update Trabajadoredificio <?php echo $model->Cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>