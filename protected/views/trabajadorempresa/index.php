<?php
/* @var $this TrabajadorempresaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadorempresas',
);

$this->menu=array(
	array('label'=>'Create Trabajadorempresa', 'url'=>array('create')),
	array('label'=>'Manage Trabajadorempresa', 'url'=>array('admin')),
);
?>

<h1>Trabajadorempresas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
