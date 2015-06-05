<?php
/* @var $this ChequeController */
/* @var $model Cheque */

$this->breadcrumbs=array(
	'Cheques'=>array('index'),
	$model->numeroCheque=>array('view','id'=>$model->numeroCheque),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cheque', 'url'=>array('index')),
	array('label'=>'Create Cheque', 'url'=>array('create')),
	array('label'=>'View Cheque', 'url'=>array('view', 'id'=>$model->numeroCheque)),
	array('label'=>'Manage Cheque', 'url'=>array('admin')),
);
?>

<h1>Update Cheque <?php echo $model->numeroCheque; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>