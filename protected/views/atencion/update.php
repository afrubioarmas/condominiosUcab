<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->idAtencion=>array('view','id'=>$model->idAtencion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'View Atencion', 'url'=>array('view', 'id'=>$model->idAtencion)),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>Update Atencion <?php echo $model->idAtencion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>