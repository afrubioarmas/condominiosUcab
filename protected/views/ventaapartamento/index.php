<?php
/* @var $this VentaapartamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ventaapartamentos',
);

$this->menu=array(
	array('label'=>'Create Ventaapartamento', 'url'=>array('create')),
	array('label'=>'Manage Ventaapartamento', 'url'=>array('admin')),
);
?>

<h1>Ventaapartamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
