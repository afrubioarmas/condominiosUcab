<?php
/* @var $this AsambleaordinariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asambleaordinarias',
);

$this->menu=array(
	array('label'=>'Create Asambleaordinaria', 'url'=>array('create')),
	array('label'=>'Manage Asambleaordinaria', 'url'=>array('admin')),
);
?>

<h1>Asambleaordinarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
