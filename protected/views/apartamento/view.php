<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */

$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	$model->idApartamento,
);

$this->menu=array(
	array('label'=>'List Apartamento', 'url'=>array('index')),
	array('label'=>'Create Apartamento', 'url'=>array('create')),
	array('label'=>'Update Apartamento', 'url'=>array('update', 'id'=>$model->idApartamento)),
	array('label'=>'Delete Apartamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idApartamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apartamento', 'url'=>array('admin')),
);
?>

<h1>View Apartamento #<?php echo $model->idApartamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idApartamento',
		'Saldo',
		'Estatus',
		'Alicuota',
		'Venta',
		'Piso_idPiso',
	),
)); ?>
