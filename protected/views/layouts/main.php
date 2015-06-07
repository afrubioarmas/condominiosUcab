<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'ActaReunion', 'url'=>array('/actareunion/admin')),
				//array('label'=>'Apartamento', 'url'=>array('/apartamento/admin')),
				array('label'=>'ApartamentoPersona', 'url'=>array('/apartamentopersona/admin')),
				array('label'=>'AreaComun', 'url'=>array('/areacomun/admin')),
				array('label'=>'AsambleaExtraordinaria', 'url'=>array('/asambleaextraordinaria/admin')),
				array('label'=>'AsambleaOrdinaria', 'url'=>array('/asambleaordinaria/admin')),
				array('label'=>'Atencion', 'url'=>array('/atencion/admin')),
				array('label'=>'CartaConsulta', 'url'=>array('/cartaconsulta/admin')),
				//array('label'=>'Cheque', 'url'=>array('/cheque/admin')),
				array('label'=>'Contrato', 'url'=>array('/contrato/admin')),
				//array('label'=>'CorreoElectronico', 'url'=>array('/correoelectronico/admin')),
				array('label'=>'CuentaBancaria', 'url'=>array('/cuentabancaria/admin')),
				array('label'=>'DocumentoCondominio', 'url'=>array('/documentocondominio/admin')),
				array('label'=>'Edificio', 'url'=>array('/edificio/admin')),
				//array('label'=>'Efectivo', 'url'=>array('/efectivo/admin')),
				array('label'=>'Empresa', 'url'=>array('/empresa/admin')),
				array('label'=>'Fondo', 'url'=>array('/fondo/admin')),
				array('label'=>'Horario', 'url'=>array('/horario/admin')),
				array('label'=>'InspeccionMantenimiento', 'url'=>array('/inspeccionmantenimiento/admin')),
				array('label'=>'JuntaCondominio', 'url'=>array('/juntacondominio/admin')),
				array('label'=>'Lugar', 'url'=>array('/lugar/admin')),
                                array('label'=>'NotificacionApartamento', 'url'=>array('/notificacionapartamento/admin')),
                                array('label'=>'Oficina', 'url'=>array('/oficina/admin')),
                                array('label'=>'PagosProgramados', 'url'=>array('/pagosprogramados/admin')),
                                array('label'=>'PersonaAsamblea', 'url'=>array('/personaasamblea/admin')),
                                //array('label'=>'Piso', 'url'=>array('/piso/admin')),
                                array('label'=>'Propietario', 'url'=>array('/propietario/admin')),
                                array('label'=>'Proveedor', 'url'=>array('/proveedor/admin')),
                                array('label'=>'Servicio', 'url'=>array('/servicio/admin')),
                                array('label'=>'SupervicionEvaluacion', 'url'=>array('/supervicionevaluacion/admin')),
                                //array('label'=>'TarjetaDeCredito', 'url'=>array('/tdc/admin')),
                                //array('label'=>'Telefono', 'url'=>array('/telefono/admin')),
                                array('label'=>'TrabajadorEdifiicio', 'url'=>array('/trabajadoredificio/admin')),
                                array('label'=>'TrabajadorEmpresa', 'url'=>array('/trabajadorempresa/admin')),
                                array('label'=>'Trabajo', 'url'=>array('/trabajo/admin')),
                                array('label'=>'Transaccion', 'url'=>array('/transaccion/admin')),
                                //array('label'=>'Transferencia', 'url'=>array('/transferencia/admin')),
                                array('label'=>'VentaApartamento', 'url'=>array('/ventaapartamento/admin')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
