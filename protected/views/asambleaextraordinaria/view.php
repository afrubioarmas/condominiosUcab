<?php
/* @var $this AsambleaextraordinariaController */
/* @var $model Asambleaextraordinaria */

$this->breadcrumbs=array(
	'Asambleaextraordinarias'=>array('index'),
	$model->idAsambleaExtraordinaria,
);

$this->menu=array(
	array('label'=>'List Asambleaextraordinaria', 'url'=>array('index')),
	array('label'=>'Create Asambleaextraordinaria', 'url'=>array('create')),
	array('label'=>'Update Asambleaextraordinaria', 'url'=>array('update', 'id'=>$model->idAsambleaExtraordinaria)),
	array('label'=>'Delete Asambleaextraordinaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAsambleaExtraordinaria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asambleaextraordinaria', 'url'=>array('admin')),
);
?>

<h1>View Asambleaextraordinaria #<?php echo $model->idAsambleaExtraordinaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAsambleaExtraordinaria',
		'Fecha',
		'Motivo',
		'Propuesta',
		'TrabajadorEmpresa_Cedula',
	),
)); ?>
<br><br>
<b>Confirmar Servicio:</b>
<br><br>
<?php if(isset( $aux[0])){ ?>
<input type="button" onclick="location.href='<?php echo Yii::app()->createUrl("asambleaextraordinaria/realizarpago",array("id"=>$servicios[0]['idTrabajo'],"servicioFinal"=>$servicios[0]['Servicio_idServicio']))?>'" value='<?php echo $aux[0]['Descripcion']." = ".$aux[0]['monto'] ?>'>
<?php } ?>
<?php if(isset( $aux[1])){ ?>
<input type="button" onclick="location.href='<?php echo Yii::app()->createUrl("asambleaextraordinaria/realizarpago",array("id"=>$servicios[0]['idTrabajo'],"servicioFinal"=>$servicios[0]['Servicio_idServicio2']))?>'" value='<?php echo $aux[1]['Descripcion']." = ".$aux[1]['monto'] ?>'>
<?php } ?>
<?php if(isset( $aux[2])){ ?>
<input type="button" onclick="location.href='<?php echo Yii::app()->createUrl("asambleaextraordinaria/realizarpago",array("id"=>$servicios[0]['idTrabajo'],"servicioFinal"=>$servicios[0]['Servicio_idServicio3']))?>'" value='<?php echo $aux[2]['Descripcion']." = ".$aux[2]['monto'] ?>'>
<?php } ?>


