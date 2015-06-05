<?php
/* @var $this CorreoelectronicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Correoelectronicos',
);

$this->menu=array(
	array('label'=>'Create Correoelectronico', 'url'=>array('create')),
	array('label'=>'Manage Correoelectronico', 'url'=>array('admin')),
);
?>

<h1>Correoelectronicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
