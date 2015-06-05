<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */

$this->breadcrumbs=array(
	'Transferencias'=>array('index'),
	$model->idTransferencia=>array('view','id'=>$model->idTransferencia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transferencia', 'url'=>array('index')),
	array('label'=>'Create Transferencia', 'url'=>array('create')),
	array('label'=>'View Transferencia', 'url'=>array('view', 'id'=>$model->idTransferencia)),
	array('label'=>'Manage Transferencia', 'url'=>array('admin')),
);
?>

<h1>Update Transferencia <?php echo $model->idTransferencia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>