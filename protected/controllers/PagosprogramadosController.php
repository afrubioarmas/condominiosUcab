<?php

class PagosprogramadosController extends Controller
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
				'actions'=>array('index','view','realizarpagosprogramados'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pagosprogramados;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pagosprogramados']))
		{
			$model->attributes=$_POST['Pagosprogramados'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idPagosProgramados));
		}
                 $sq = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $edificios= $co->queryAll();   
                //var_dump($data3);die;
                foreach ($edificios as $value) {
                    $aux[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux;
                //var_dump($data3);die;
                

		$this->render('create',array(
			'model'=>$model,
                        'edificios'=>$edificios,
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

		if(isset($_POST['Pagosprogramados']))
		{
			$model->attributes=$_POST['Pagosprogramados'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idPagosProgramados));
		}
                 $sq = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $edificios= $co->queryAll();   
                //var_dump($edificios);die;
                foreach ($edificios as $value) {
                    $aux[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux;
                //var_dump($edificios);die;

		$this->render('update',array(
			'model'=>$model,
                        'edificios'=>$edificios,
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
		$dataProvider=new CActiveDataProvider('Pagosprogramados');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pagosprogramados('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pagosprogramados']))
			$model->attributes=$_GET['Pagosprogramados'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pagosprogramados the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pagosprogramados::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pagosprogramados $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pagosprogramados-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionRealizarpagosprogramados($id)
	{
		$sq = "SELECT e.RIF,e.TrabajadorEmpresa_Cedula, t.Cedula,p.Edificio_RIF,p.Descripcion,p.MontoPorApartamento,p.idPagosprogramados
                    FROM edificio e
                    JOIN trabajadorempresa t ON e.TrabajadorEmpresa_Cedula = t.Cedula
                    JOIN pagosprogramados p ON p.Edificio_RIF = e.RIF
                    WHERE e.TrabajadorEmpresa_Cedula =".$id."
                    ORDER BY e.RIF ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $edificios= $co->queryAll();   
                //var_dump($edificios);die;
                foreach ($edificios as $value) {
                    $transaccion = new transaccion;
                    $transaccion->Monto = $value['MontoPorApartamento']; 
                    $transaccion->Fecha = date('Y-m-d H:i:s');
                    $transaccion->Aprobado=1;
                    $transaccion->Descripcion = $value['Descripcion']; 
                    $transaccion->Ingreso = 0;
                    $transaccion->TDC_NumeroTDC=0;
                    $transaccion->Transferencia_idTransferencia=1;
                    $transaccion->Efectivo_idEfectivo=1;
                    $transaccion->Cheque_numeroCheque=1;
                    $transaccion->Fondo_idFondo=1;
                    $transaccion->PagosProgramados_idPagosProgramados=$value['idPagosprogramados'];
                    $transaccion->Edificio_RIF=$value['RIF'];
                    $transaccion->Propietario_Cedula=0;
                    $transaccion->Trabajo_idTrabajo=0;
                    $transaccion->save();
                    
                    
                }

	}
}
