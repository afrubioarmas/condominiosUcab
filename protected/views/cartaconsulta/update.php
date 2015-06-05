<?php
/* @var $this CartaconsultaController */
/* @var $model Cartaconsulta */

$this->breadcrumbs=array(
	'Cartaconsultas'=>array('index'),
	$model->idCartaConsulta=>array('view','id'=>$model->idCartaConsulta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cartaconsulta', 'url'=>array('index')),
	array('label'=>'Create Cartaconsulta', 'url'=>array('create')),
	array('label'=>'View Cartaconsulta', 'url'=>array('view', 'id'=>$model->idCartaConsulta)),
	array('label'=>'Manage Cartaconsulta', 'url'=>array('admin')),
);
?>

<h1>Update Cartaconsulta <?php echo $model->idCartaConsulta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>