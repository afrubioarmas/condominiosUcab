<?php
/* @var $this EdificioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edificios',
);

$this->menu=array(
	array('label'=>'Create Edificio', 'url'=>array('create')),
	array('label'=>'Manage Edificio', 'url'=>array('admin')),
);
?>

<h1>Edificios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
