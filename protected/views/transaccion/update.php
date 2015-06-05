<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->idTransaccion=>array('view','id'=>$model->idTransaccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaccion', 'url'=>array('index')),
	array('label'=>'Create Transaccion', 'url'=>array('create')),
	array('label'=>'View Transaccion', 'url'=>array('view', 'id'=>$model->idTransaccion)),
	array('label'=>'Manage Transaccion', 'url'=>array('admin')),
);
?>

<h1>Update Transaccion <?php echo $model->idTransaccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>