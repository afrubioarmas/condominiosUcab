<?php
/* @var $this JuntacondominioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Juntacondominios',
);

$this->menu=array(
	array('label'=>'Create Juntacondominio', 'url'=>array('create')),
	array('label'=>'Manage Juntacondominio', 'url'=>array('admin')),
);
?>

<h1>Juntacondominios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
