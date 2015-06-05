<?php
/* @var $this EfectivoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Efectivos',
);

$this->menu=array(
	array('label'=>'Create Efectivo', 'url'=>array('create')),
	array('label'=>'Manage Efectivo', 'url'=>array('admin')),
);
?>

<h1>Efectivos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
