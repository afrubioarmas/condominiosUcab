<?php
/* @var $this AsambleaextraordinariaController */
/* @var $model Asambleaextraordinaria */

$this->breadcrumbs=array(
	'Asambleaextraordinarias'=>array('index'),
	$model->idAsambleaExtraordinaria=>array('view','id'=>$model->idAsambleaExtraordinaria),
	'Update',
);

$this->menu=array(
	array('label'=>'List Asambleaextraordinaria', 'url'=>array('index')),
	array('label'=>'Create Asambleaextraordinaria', 'url'=>array('create')),
	array('label'=>'View Asambleaextraordinaria', 'url'=>array('view', 'id'=>$model->idAsambleaExtraordinaria)),
	array('label'=>'Manage Asambleaextraordinaria', 'url'=>array('admin')),
);
?>

<h1>Update Asambleaextraordinaria <?php echo $model->idAsambleaExtraordinaria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>