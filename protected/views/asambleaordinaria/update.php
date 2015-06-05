<?php
/* @var $this AsambleaordinariaController */
/* @var $model Asambleaordinaria */

$this->breadcrumbs=array(
	'Asambleaordinarias'=>array('index'),
	$model->idAsambleaOrdinaria=>array('view','id'=>$model->idAsambleaOrdinaria),
	'Update',
);

$this->menu=array(
	array('label'=>'List Asambleaordinaria', 'url'=>array('index')),
	array('label'=>'Create Asambleaordinaria', 'url'=>array('create')),
	array('label'=>'View Asambleaordinaria', 'url'=>array('view', 'id'=>$model->idAsambleaOrdinaria)),
	array('label'=>'Manage Asambleaordinaria', 'url'=>array('admin')),
);
?>

<h1>Update Asambleaordinaria <?php echo $model->idAsambleaOrdinaria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>