<?php
/* @var $this CorreoelectronicoController */
/* @var $model Correoelectronico */

$this->breadcrumbs=array(
	'Correoelectronicos'=>array('index'),
	$model->idCorrecoElectronico=>array('view','id'=>$model->idCorrecoElectronico),
	'Update',
);

$this->menu=array(
	array('label'=>'List Correoelectronico', 'url'=>array('index')),
	array('label'=>'Create Correoelectronico', 'url'=>array('create')),
	array('label'=>'View Correoelectronico', 'url'=>array('view', 'id'=>$model->idCorrecoElectronico)),
	array('label'=>'Manage Correoelectronico', 'url'=>array('admin')),
);
?>

<h1>Update Correoelectronico <?php echo $model->idCorrecoElectronico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>