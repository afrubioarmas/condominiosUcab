<?php
/* @var $this FondoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fondos',
);

$this->menu=array(
	array('label'=>'Create Fondo', 'url'=>array('create')),
	array('label'=>'Manage Fondo', 'url'=>array('admin')),
);
?>

<h1>Fondos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
