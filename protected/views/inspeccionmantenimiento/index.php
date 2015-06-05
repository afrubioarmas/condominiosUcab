<?php
/* @var $this InspeccionmantenimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inspeccionmantenimientos',
);

$this->menu=array(
	array('label'=>'Create Inspeccionmantenimiento', 'url'=>array('create')),
	array('label'=>'Manage Inspeccionmantenimiento', 'url'=>array('admin')),
);
?>

<h1>Inspeccionmantenimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
