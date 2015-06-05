<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */

$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	$model->idApartamento=>array('view','id'=>$model->idApartamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apartamento', 'url'=>array('index')),
	array('label'=>'Create Apartamento', 'url'=>array('create')),
	array('label'=>'View Apartamento', 'url'=>array('view', 'id'=>$model->idApartamento)),
	array('label'=>'Manage Apartamento', 'url'=>array('admin')),
);
?>

<h1>Update Apartamento <?php echo $model->idApartamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>