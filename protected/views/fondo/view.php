<?php
/* @var $this FondoController */
/* @var $model Fondo */

$this->breadcrumbs=array(
	'Fondos'=>array('index'),
	$model->idFondo,
);

$this->menu=array(
	array('label'=>'List Fondo', 'url'=>array('index')),
	array('label'=>'Create Fondo', 'url'=>array('create')),
	array('label'=>'Update Fondo', 'url'=>array('update', 'id'=>$model->idFondo)),
	array('label'=>'Delete Fondo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFondo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fondo', 'url'=>array('admin')),
);
?>

<h1>View Fondo #<?php echo $model->idFondo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFondo',
		'Tipo',
		'Saldo',
	),
)); ?>
