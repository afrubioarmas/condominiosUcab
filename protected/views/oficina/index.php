<?php
/* @var $this OficinaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oficinas',
);

$this->menu=array(
	array('label'=>'Create Oficina', 'url'=>array('create')),
	array('label'=>'Manage Oficina', 'url'=>array('admin')),
);
?>

<h1>Oficinas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
