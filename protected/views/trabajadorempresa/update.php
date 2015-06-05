<?php
/* @var $this TrabajadorempresaController */
/* @var $model Trabajadorempresa */

$this->breadcrumbs=array(
	'Trabajadorempresas'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajadorempresa', 'url'=>array('index')),
	array('label'=>'Create Trabajadorempresa', 'url'=>array('create')),
	array('label'=>'View Trabajadorempresa', 'url'=>array('view', 'id'=>$model->Cedula)),
	array('label'=>'Manage Trabajadorempresa', 'url'=>array('admin')),
);
?>

<h1>Update Trabajadorempresa <?php echo $model->Cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>