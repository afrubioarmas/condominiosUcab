<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Horario', 'url'=>array('index')),
	array('label'=>'Create Horario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#horario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Horarios</h1>

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
	'id'=>'horario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idHorario',
		'HoraInicio',
		'HoraFin',
		'Dia',
		'Oficina_idOficina',
		'Oficina_Empresa_RIF',
		/*
		'TrabajadorEmpresa_Cedula',
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
		'ActaReunion_idActaReunion',
		'ActaReunion_JuntaCondominio_idJuntaCondominio',
		'ActaReunion_JuntaCondominio_Edificio_RIF',
		'ActaReunion_TrabajadorEmpresa_Cedula',
		'AsambleaOrdinaria_idAsambleaOrdinaria',
		'AsambleaExtraordinaria_idAsambleaExtraordinaria',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
