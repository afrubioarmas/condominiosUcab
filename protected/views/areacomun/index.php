<?php
/* @var $this AreacomunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Areacomuns',
);

$this->menu=array(
	array('label'=>'Create Areacomun', 'url'=>array('create')),
	array('label'=>'Manage Areacomun', 'url'=>array('admin')),
);
?>

<h1>Areacomuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
