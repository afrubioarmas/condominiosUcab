<?php
/* @var $this SupervicionevaluacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supervicionevaluacions',
);

$this->menu=array(
	array('label'=>'Create Supervicionevaluacion', 'url'=>array('create')),
	array('label'=>'Manage Supervicionevaluacion', 'url'=>array('admin')),
);
?>

<h1>Supervicionevaluacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
