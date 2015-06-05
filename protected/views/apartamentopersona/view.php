<?php
/* @var $this ApartamentopersonaController */
/* @var $model Apartamentopersona */

$this->breadcrumbs=array(
	'Apartamentopersonas'=>array('index'),
	$model->idApartamentoPersona,
);

$this->menu=array(
	array('label'=>'List Apartamentopersona', 'url'=>array('index')),
	array('label'=>'Create Apartamentopersona', 'url'=>array('create')),
	array('label'=>'Update Apartamentopersona', 'url'=>array('update', 'id'=>$model->idApartamentoPersona)),
	array('label'=>'Delete Apartamentopersona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idApartamentoPersona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apartamentopersona', 'url'=>array('admin')),
);
?>

<h1>View Apartamentopersona #<?php echo $model->idApartamentoPersona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idApartamentoPersona',
		'Apartamento_idApartamento',
		'Propietario_Cedula',
	),
)); ?>
