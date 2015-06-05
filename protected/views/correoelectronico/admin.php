<?php
/* @var $this CorreoelectronicoController */
/* @var $model Correoelectronico */

$this->breadcrumbs=array(
	'Correoelectronicos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Correoelectronico', 'url'=>array('index')),
	array('label'=>'Create Correoelectronico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#correoelectronico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Correoelectronicos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'correoelectronico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idCorrecoElectronico',
		'Direccion',
		'Oficina_idOficina',
		'Oficina_Empresa_RIF',
		'Propietario_Cedula',
		'TrabajadorEdificio_Cedula',
		/*
		'TrabajadorEmpresa_Cedula',
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
