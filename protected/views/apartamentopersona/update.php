<?php
/* @var $this ApartamentopersonaController */
/* @var $model Apartamentopersona */

$this->breadcrumbs=array(
	'Apartamentopersonas'=>array('index'),
	$model->idApartamentoPersona=>array('view','id'=>$model->idApartamentoPersona),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apartamentopersona', 'url'=>array('index')),
	array('label'=>'Create Apartamentopersona', 'url'=>array('create')),
	array('label'=>'View Apartamentopersona', 'url'=>array('view', 'id'=>$model->idApartamentoPersona)),
	array('label'=>'Manage Apartamentopersona', 'url'=>array('admin')),
);
?>

<h1>Update Apartamentopersona <?php echo $model->idApartamentoPersona; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>