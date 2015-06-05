<?php
/* @var $this PropietarioController */
/* @var $model Propietario */

$this->breadcrumbs=array(
	'Propietarios'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Propietario', 'url'=>array('index')),
	array('label'=>'Create Propietario', 'url'=>array('create')),
	array('label'=>'View Propietario', 'url'=>array('view', 'id'=>$model->Cedula)),
	array('label'=>'Manage Propietario', 'url'=>array('admin')),
);
?>

<h1>Update Propietario <?php echo $model->Cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>