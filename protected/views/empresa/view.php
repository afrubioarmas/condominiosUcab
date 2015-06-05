<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->RIF,
);

$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->RIF)),
	array('label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RIF),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>View Empresa #<?php echo $model->RIF; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RIF',
		'Nombre',
		'UnidadTributaria',
	),
)); ?>
