<?php
/* @var $this NotificacionapartamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notificacionapartamentos',
);

$this->menu=array(
	array('label'=>'Create Notificacionapartamento', 'url'=>array('create')),
	array('label'=>'Manage Notificacionapartamento', 'url'=>array('admin')),
);
?>

<h1>Notificacionapartamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
