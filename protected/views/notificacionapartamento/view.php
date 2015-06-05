<?php
/* @var $this NotificacionapartamentoController */
/* @var $model Notificacionapartamento */

$this->breadcrumbs=array(
	'Notificacionapartamentos'=>array('index'),
	$model->idNotificacionApartamento,
);

$this->menu=array(
	array('label'=>'List Notificacionapartamento', 'url'=>array('index')),
	array('label'=>'Create Notificacionapartamento', 'url'=>array('create')),
	array('label'=>'Update Notificacionapartamento', 'url'=>array('update', 'id'=>$model->idNotificacionApartamento)),
	array('label'=>'Delete Notificacionapartamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNotificacionApartamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notificacionapartamento', 'url'=>array('admin')),
);
?>

<h1>View Notificacionapartamento #<?php echo $model->idNotificacionApartamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idNotificacionApartamento',
		'Fecha',
		'AsambleaOrdinaria_idAsambleaOrdinaria',
		'AsambleaExtraordinaria_idAsambleaExtraordinaria',
		'Transaccion_idTransaccion',
		'Apartamento_idApartamento',
	),
)); ?>
