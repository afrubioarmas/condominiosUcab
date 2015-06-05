<?php
/* @var $this ChequeController */
/* @var $model Cheque */

$this->breadcrumbs=array(
	'Cheques'=>array('index'),
	$model->numeroCheque,
);

$this->menu=array(
	array('label'=>'List Cheque', 'url'=>array('index')),
	array('label'=>'Create Cheque', 'url'=>array('create')),
	array('label'=>'Update Cheque', 'url'=>array('update', 'id'=>$model->numeroCheque)),
	array('label'=>'Delete Cheque', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numeroCheque),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cheque', 'url'=>array('admin')),
);
?>

<h1>View Cheque #<?php echo $model->numeroCheque; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numeroCheque',
		'Endosable',
		'CuentaBancaria_NumeroDeCuenta',
	),
)); ?>
