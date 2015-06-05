<?php
/* @var $this TdcController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tdcs',
);

$this->menu=array(
	array('label'=>'Create Tdc', 'url'=>array('create')),
	array('label'=>'Manage Tdc', 'url'=>array('admin')),
);
?>

<h1>Tdcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
