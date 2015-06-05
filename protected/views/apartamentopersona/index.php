<?php
/* @var $this ApartamentopersonaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apartamentopersonas',
);

$this->menu=array(
	array('label'=>'Create Apartamentopersona', 'url'=>array('create')),
	array('label'=>'Manage Apartamentopersona', 'url'=>array('admin')),
);
?>

<h1>Apartamentopersonas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
