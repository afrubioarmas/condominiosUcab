<?php
/* @var $this EdificioController */
/* @var $model Edificio */

$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	$model->RIF,
);

$this->menu=array(
	array('label'=>'List Edificio', 'url'=>array('index')),
	array('label'=>'Create Edificio', 'url'=>array('create')),
	array('label'=>'Update Edificio', 'url'=>array('update', 'id'=>$model->RIF)),
	array('label'=>'Delete Edificio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RIF),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Edificio', 'url'=>array('admin')),
);
?>

<h1>View Edificio #<?php echo $model->RIF; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RIF',
		'Nombre',
		'Tipo',
		'InteresMora',
		'Asistencia1Reunion',
		'Asistencia2Reunion',
		'DerechoVoto',
		'Lugar_idLugar',
		'TrabajadorEmpresa_Cedula',
                'Pisos',
		'ApartamentosPiso',
	),
)); ?>
