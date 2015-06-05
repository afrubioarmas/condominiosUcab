<?php
/* @var $this TelefonoController */
/* @var $model Telefono */

$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	$model->numeroTelefono=>array('view','id'=>$model->numeroTelefono),
	'Update',
);

$this->menu=array(
	array('label'=>'List Telefono', 'url'=>array('index')),
	array('label'=>'Create Telefono', 'url'=>array('create')),
	array('label'=>'View Telefono', 'url'=>array('view', 'id'=>$model->numeroTelefono)),
	array('label'=>'Manage Telefono', 'url'=>array('admin')),
);
?>

<h1>Update Telefono <?php echo $model->numeroTelefono; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>