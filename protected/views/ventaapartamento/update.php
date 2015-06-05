<?php
/* @var $this VentaapartamentoController */
/* @var $model Ventaapartamento */

$this->breadcrumbs=array(
	'Ventaapartamentos'=>array('index'),
	$model->idVentaApartamento=>array('view','id'=>$model->idVentaApartamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ventaapartamento', 'url'=>array('index')),
	array('label'=>'Create Ventaapartamento', 'url'=>array('create')),
	array('label'=>'View Ventaapartamento', 'url'=>array('view', 'id'=>$model->idVentaApartamento)),
	array('label'=>'Manage Ventaapartamento', 'url'=>array('admin')),
);
?>

<h1>Update Ventaapartamento <?php echo $model->idVentaApartamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>