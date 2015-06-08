<?php

class AsambleaextraordinariaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','realizarpago'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                
                $sq2 = "SELECT t.idTrabajo, t.Servicio_idServicio, t.Servicio_idServicio2, t.Servicio_idServicio3 
                    FROM trabajo t
                    WHERE t.AsambleaExtraordinaria_idAsambleaExtraordinaria = ".$id."
                        
                    ";
                $co2 = Yii::app()->db->createCommand($sq2);
                
                $servicios = $co2->queryAll();   
                //var_dump($servicios);die;
                
                $sq = "SELECT s.idServicio, s.Descripcion,s.monto, p.Nombre
                    FROM servicio s
                    JOIN proveedor p ON s.Proveedor_Rif = p.Rif
                    WHERE s.idServicio = ".$servicios[0]['Servicio_idServicio']." OR
                          s.idServicio = ".$servicios[0]['Servicio_idServicio2']." OR
                          s.idServicio = ".$servicios[0]['Servicio_idServicio3']."    
                    ORDER BY p.Nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                
                $aux=$data3;
                //var_dump($aux);die;
                
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'servicios'=>$servicios,
			'aux'=>$aux,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Asambleaextraordinaria;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Asambleaextraordinaria']))
		{
			$model->attributes=$_POST['Asambleaextraordinaria'];
			if($model->save())
                                if($model->Motivo=='Trabajo')
                                    $this->redirect(array('/trabajo/create'));
				$this->redirect(array('view','id'=>$model->idAsambleaExtraordinaria));
		}

                
                $sq2 = "SELECT t.cedula, t.nombre, t.apellido 
                    FROM trabajadorempresa t
                    ORDER BY t.nombre ASC";
                $co2 = Yii::app()->db->createCommand($sq2);
                
                $trabajadores = $co2->queryAll();   
                //var_dump($trabajadores);die;
                foreach ($trabajadores as $value) {
                    $aux2[$value['cedula']] = $value['nombre'].' '.$value['apellido'];
                }
                $trabajadores = $aux2;
                //var_dump($trabajadores);die;
                
                
		$this->render('create',array(
			'model'=>$model,
			'trabajadores'=>$trabajadores,
                    
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Asambleaextraordinaria']))
		{
			$model->attributes=$_POST['Asambleaextraordinaria'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idAsambleaExtraordinaria));
		}

                
                $sq2 = "SELECT t.cedula, t.nombre, t.apellido 
                    FROM trabajadorempresa t
                    ORDER BY t.nombre ASC";
                $co2 = Yii::app()->db->createCommand($sq2);
                
                $trabajadores = $co2->queryAll();   
                //var_dump($trabajadores);die;
                foreach ($trabajadores as $value) {
                    $aux2[$value['cedula']] = $value['nombre'].' '.$value['apellido'];
                }
                $trabajadores = $aux2;
                //var_dump($trabajadores);die;
                
		$this->render('update',array(
			'model'=>$model,
                        'trabajadores'=>$trabajadores,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Asambleaextraordinaria');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Asambleaextraordinaria('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Asambleaextraordinaria']))
			$model->attributes=$_GET['Asambleaextraordinaria'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Asambleaextraordinaria the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Asambleaextraordinaria::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Asambleaextraordinaria $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='asambleaextraordinaria-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionRealizarpago($id,$servicioFinal)
	{
                
		$trabajo=Trabajo::model()->findbypk($id);
                $trabajo->Servicio_Final=$servicioFinal;
                $servicio=Servicio::model()->findbypk($trabajo->Servicio_Final);
                $Asambleaextraordinaria=Asambleaextraordinaria::model()->findbypk($trabajo->AsambleaExtraordinaria_idAsambleaExtraordinaria);
                
                $transaccion = new transaccion;
                    $transaccion->Monto = $servicio->Monto; 
                    $transaccion->Fecha = date('Y-m-d H:i:s');
                    $transaccion->Aprobado=1;
                    $transaccion->Descripcion = $servicio->Descripcion; 
                    $transaccion->Ingreso = 0;
                    $transaccion->TDC_NumeroTDC=0;
                    $transaccion->Transferencia_idTransferencia=1;
                    $transaccion->Efectivo_idEfectivo=0;
                    $transaccion->Cheque_numeroCheque=0;
                    $transaccion->Fondo_idFondo=1;
                    $transaccion->PagosProgramados_idPagosProgramados=0;
                    $transaccion->Edificio_RIF=$trabajo->Edificio_RIF;
                    $transaccion->Propietario_Cedula=0;
                    $transaccion->Trabajo_idTrabajo=$id;
                    $transaccion->save();
                    
                $dataProvider=new CActiveDataProvider('Asambleaextraordinaria');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
}
