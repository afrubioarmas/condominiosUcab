<?php
/* @var $this AsambleaextraordinariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asambleaextraordinarias',
);

$this->menu=array(
	array('label'=>'Create Asambleaextraordinaria', 'url'=>array('create')),
	array('label'=>'Manage Asambleaextraordinaria', 'url'=>array('admin')),
);
?>

<h1>Asambleaextraordinarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
