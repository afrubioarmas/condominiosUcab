<?php
/* @var $this PagosprogramadosController */
/* @var $model Pagosprogramados */

$this->breadcrumbs=array(
	'Pagosprogramadoses'=>array('index'),
	$model->idPagosProgramados,
);

$this->menu=array(
	array('label'=>'List Pagosprogramados', 'url'=>array('index')),
	array('label'=>'Create Pagosprogramados', 'url'=>array('create')),
	array('label'=>'Update Pagosprogramados', 'url'=>array('update', 'id'=>$model->idPagosProgramados)),
	array('label'=>'Delete Pagosprogramados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPagosProgramados),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagosprogramados', 'url'=>array('admin')),
);
?>

<h1>View Pagosprogramados #<?php echo $model->idPagosProgramados; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPagosProgramados',
		'Descripcion',
		'MontoPorApartamento',
		'Edificio_RIF',
	),
)); ?>
