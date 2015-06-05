<?php
/* @var $this NotificacionapartamentoController */
/* @var $model Notificacionapartamento */

$this->breadcrumbs=array(
	'Notificacionapartamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notificacionapartamento', 'url'=>array('index')),
	array('label'=>'Manage Notificacionapartamento', 'url'=>array('admin')),
);
?>

<h1>Create Notificacionapartamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>