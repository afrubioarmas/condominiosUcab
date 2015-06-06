<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'Trabajos'=>array('index'),
	$model->idTrabajo,
);

$this->menu=array(
	array('label'=>'List Trabajo', 'url'=>array('index')),
	array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Update Trabajo', 'url'=>array('update', 'id'=>$model->idTrabajo)),
	array('label'=>'Delete Trabajo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrabajo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajo', 'url'=>array('admin')),
);
?>

<h1>View Trabajo #<?php echo $model->idTrabajo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTrabajo',
		'Monto',
		'Aprobado',
		'AltoValor',
		'PagoParcial',
		'Mejora',
		'AsambleaExtraordinaria_idAsambleaExtraordinaria',
		'CartaConsulta_idCartaConsulta',
		'Servicio_idServicio',
		'Servicio_Proveedor_RIF',
	),
)); ?>
