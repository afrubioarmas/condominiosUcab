<?php
/* @var $this DocumentocondominioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documentocondominios',
);

$this->menu=array(
	array('label'=>'Create Documentocondominio', 'url'=>array('create')),
	array('label'=>'Manage Documentocondominio', 'url'=>array('admin')),
);
?>

<h1>Documentocondominios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
