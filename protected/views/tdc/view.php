<?php
/* @var $this TdcController */
/* @var $model Tdc */

$this->breadcrumbs=array(
	'Tdcs'=>array('index'),
	$model->NumeroTDC,
);

$this->menu=array(
	array('label'=>'List Tdc', 'url'=>array('index')),
	array('label'=>'Create Tdc', 'url'=>array('create')),
	array('label'=>'Update Tdc', 'url'=>array('update', 'id'=>$model->NumeroTDC)),
	array('label'=>'Delete Tdc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NumeroTDC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tdc', 'url'=>array('admin')),
);
?>

<h1>View Tdc #<?php echo $model->NumeroTDC; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NumeroTDC',
		'Marca',
		'FechaVencimiento',
		'FechaExpedicion',
		'CodigoSeguridad',
	),
)); ?>
