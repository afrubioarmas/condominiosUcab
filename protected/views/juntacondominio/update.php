<?php
/* @var $this JuntacondominioController */
/* @var $model Juntacondominio */

$this->breadcrumbs=array(
	'Juntacondominios'=>array('index'),
	$model->idJuntaCondominio=>array('view','id'=>$model->idJuntaCondominio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Juntacondominio', 'url'=>array('index')),
	array('label'=>'Create Juntacondominio', 'url'=>array('create')),
	array('label'=>'View Juntacondominio', 'url'=>array('view', 'id'=>$model->idJuntaCondominio)),
	array('label'=>'Manage Juntacondominio', 'url'=>array('admin')),
);
?>

<h1>Update Juntacondominio <?php echo $model->idJuntaCondominio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>