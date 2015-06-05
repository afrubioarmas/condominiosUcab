<?php
/* @var $this ActareunionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actareunions',
);

$this->menu=array(
	array('label'=>'Create Actareunion', 'url'=>array('create')),
	array('label'=>'Manage Actareunion', 'url'=>array('admin')),
);
?>

<h1>Actareunions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
