<?php
/* @var $this FondoController */
/* @var $model Fondo */

$this->breadcrumbs=array(
	'Fondos'=>array('index'),
	$model->idFondo=>array('view','id'=>$model->idFondo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fondo', 'url'=>array('index')),
	array('label'=>'Create Fondo', 'url'=>array('create')),
	array('label'=>'View Fondo', 'url'=>array('view', 'id'=>$model->idFondo)),
	array('label'=>'Manage Fondo', 'url'=>array('admin')),
);
?>

<h1>Update Fondo <?php echo $model->idFondo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>