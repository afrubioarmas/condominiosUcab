<?php
/* @var $this PisoController */
/* @var $model Piso */

$this->breadcrumbs=array(
	'Pisos'=>array('index'),
	$model->idPiso=>array('view','id'=>$model->idPiso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Piso', 'url'=>array('index')),
	array('label'=>'Create Piso', 'url'=>array('create')),
	array('label'=>'View Piso', 'url'=>array('view', 'id'=>$model->idPiso)),
	array('label'=>'Manage Piso', 'url'=>array('admin')),
);
?>

<h1>Update Piso <?php echo $model->idPiso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>