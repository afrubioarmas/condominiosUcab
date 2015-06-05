<?php
/* @var $this CartaconsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cartaconsultas',
);

$this->menu=array(
	array('label'=>'Create Cartaconsulta', 'url'=>array('create')),
	array('label'=>'Manage Cartaconsulta', 'url'=>array('admin')),
);
?>

<h1>Cartaconsultas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
