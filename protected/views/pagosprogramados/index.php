<?php
/* @var $this PagosprogramadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagosprogramadoses',
);

$this->menu=array(
	array('label'=>'Create Pagosprogramados', 'url'=>array('create')),
	array('label'=>'Manage Pagosprogramados', 'url'=>array('admin')),
);
?>

<h1>Pagosprogramadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
