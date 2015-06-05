<?php
/* @var $this TdcController */
/* @var $model Tdc */

$this->breadcrumbs=array(
	'Tdcs'=>array('index'),
	$model->NumeroTDC=>array('view','id'=>$model->NumeroTDC),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tdc', 'url'=>array('index')),
	array('label'=>'Create Tdc', 'url'=>array('create')),
	array('label'=>'View Tdc', 'url'=>array('view', 'id'=>$model->NumeroTDC)),
	array('label'=>'Manage Tdc', 'url'=>array('admin')),
);
?>

<h1>Update Tdc <?php echo $model->NumeroTDC; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>