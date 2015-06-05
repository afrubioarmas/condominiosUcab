<?php
/* @var $this EdificioController */
/* @var $model Edificio */

$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	$model->RIF=>array('view','id'=>$model->RIF),
	'Update',
);

$this->menu=array(
	array('label'=>'List Edificio', 'url'=>array('index')),
	array('label'=>'Create Edificio', 'url'=>array('create')),
	array('label'=>'View Edificio', 'url'=>array('view', 'id'=>$model->RIF)),
	array('label'=>'Manage Edificio', 'url'=>array('admin')),
);
?>

<h1>Update Edificio <?php echo $model->RIF; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>