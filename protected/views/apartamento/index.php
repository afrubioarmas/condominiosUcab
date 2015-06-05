<?php
/* @var $this ApartamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apartamentos',
);

$this->menu=array(
	array('label'=>'Create Apartamento', 'url'=>array('create')),
	array('label'=>'Manage Apartamento', 'url'=>array('admin')),
);
?>

<h1>Apartamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
