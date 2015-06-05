<?php
/* @var $this JuntacondominioController */
/* @var $model Juntacondominio */

$this->breadcrumbs=array(
	'Juntacondominios'=>array('index'),
	$model->idJuntaCondominio,
);

$this->menu=array(
	array('label'=>'List Juntacondominio', 'url'=>array('index')),
	array('label'=>'Create Juntacondominio', 'url'=>array('create')),
	array('label'=>'Update Juntacondominio', 'url'=>array('update', 'id'=>$model->idJuntaCondominio)),
	array('label'=>'Delete Juntacondominio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJuntaCondominio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Juntacondominio', 'url'=>array('admin')),
);
?>

<h1>View Juntacondominio #<?php echo $model->idJuntaCondominio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idJuntaCondominio',
		'Edificio_RIF',
	),
)); ?>
