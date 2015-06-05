<?php
/* @var $this TrabajadoredificioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadoredificios',
);

$this->menu=array(
	array('label'=>'Create Trabajadoredificio', 'url'=>array('create')),
	array('label'=>'Manage Trabajadoredificio', 'url'=>array('admin')),
);
?>

<h1>Trabajadoredificios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
