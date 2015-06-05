<?php
/* @var $this CuentabancariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuentabancarias',
);

$this->menu=array(
	array('label'=>'Create Cuentabancaria', 'url'=>array('create')),
	array('label'=>'Manage Cuentabancaria', 'url'=>array('admin')),
);
?>

<h1>Cuentabancarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
