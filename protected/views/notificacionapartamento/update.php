<?php
/* @var $this NotificacionapartamentoController */
/* @var $model Notificacionapartamento */

$this->breadcrumbs=array(
	'Notificacionapartamentos'=>array('index'),
	$model->idNotificacionApartamento=>array('view','id'=>$model->idNotificacionApartamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notificacionapartamento', 'url'=>array('index')),
	array('label'=>'Create Notificacionapartamento', 'url'=>array('create')),
	array('label'=>'View Notificacionapartamento', 'url'=>array('view', 'id'=>$model->idNotificacionApartamento)),
	array('label'=>'Manage Notificacionapartamento', 'url'=>array('admin')),
);
?>

<h1>Update Notificacionapartamento <?php echo $model->idNotificacionApartamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>