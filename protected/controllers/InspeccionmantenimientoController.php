<?php

class InspeccionmantenimientoController extends Controller
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
				'actions'=>array('index','view'),
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
		$model=new Inspeccionmantenimiento;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inspeccionmantenimiento']))
		{
			$model->attributes=$_POST['Inspeccionmantenimiento'];
			if($model->save()){
                                if($model->Mantenimiento==1){
                                    $transaccion = new transaccion;
                                    $transaccion->
                                    
                                }
                            
				$this->redirect(array('view','id'=>$model->idInspeccionMantenimiento));
                        }
		}
                
                
                
                $sq = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $co1 = Yii::app()->db->createCommand($sq);
                
                $edificios= $co1->queryAll();   
                //var_dump($edificios);die;
                foreach ($edificios as $value) {
                    $aux[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux;
                //var_dump($edificios);die;
                
                 $sq = "SELECT t.Cedula, t.Nombre
                                        FROM trabajadoredificio t
                                        ORDER BY t.Cedula ASC";
                                    $co1 = Yii::app()->db->createCommand($sq);

                                    $trabajadoredificio= $co1->queryAll();   
                                    //var_dump($trabajadoredificio);die;
                                    foreach ($trabajadoredificio as $value) {
                                        $aux2[$value['Cedula']] = $value['Nombre'];
                                    }
                                    $trabajadoredificio = $aux2;
                                    //var_dump($trabajadorempresa);die;
                
                $sq = "SELECT a.idAreacomun, a.Edificio_RIF, a.Descripcion,e.nombre
                    FROM areacomun a
                    JOIN edificio e ON a.Edificio_RIF = e.RIF
                    ORDER BY e.nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                //var_dump($data3);die;
                
                foreach ($data3 as $value) {
                    $aux[$value['idAreacomun']] = $value['nombre'].' --> '.$value['Descripcion'];
                }
                
                $areascomun = $aux;
                //var_dump($data3);die;
 
		$this->render('create',array(
			'model'=>$model,
			'areascomun'=>$areascomun,
                        'trabajadoredificio'=>$trabajadoredificio,
                    
                    
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

		if(isset($_POST['Inspeccionmantenimiento']))
		{
			$model->attributes=$_POST['Inspeccionmantenimiento'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idInspeccionMantenimiento));
		}

		$sq = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $co1 = Yii::app()->db->createCommand($sq);
                
                $edificios= $co1->queryAll();   
                //var_dump($edificios);die;
                foreach ($edificios as $value) {
                    $aux[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux;
                //var_dump($edificios);die;
                
                 $sq = "SELECT t.Cedula, t.Nombre
                                        FROM $trabajadoredificio t
                                        ORDER BY t.Cedula ASC";
                                    $co1 = Yii::app()->db->createCommand($sq);

                                    $trabajadoredificio= $co1->queryAll();   
                                    //var_dump($trabajadoredificio);die;
                                    foreach ($trabajadoredificio as $value) {
                                        $aux2[$value['Cedula']] = $value['Nombre'];
                                    }
                                    $trabajadoredificio = $aux2;
                                    //var_dump($trabajadoredificio);die;
                
                $sq = "SELECT a.idAreacomun, a.Edificio_RIF, a.Descripcion,e.nombre
                    FROM areacomun a
                    JOIN edificio e ON a.Edificio_RIF = e.RIF
                    ORDER BY e.nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                //var_dump($data3);die;
                
                foreach ($data3 as $value) {
                    $aux[$value['idAreacomun']] = $value['nombre'].' --> '.$value['Descripcion'];
                }
                
                $areascomun = $aux;
                //var_dump($data3);die;
 
		$this->render('create',array(
			'model'=>$model,
			'areascomun'=>$areascomun,
                        'trabajadoredificio'=>$trabajadoredificio,
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
		$dataProvider=new CActiveDataProvider('Inspeccionmantenimiento');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Inspeccionmantenimiento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Inspeccionmantenimiento']))
			$model->attributes=$_GET['Inspeccionmantenimiento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Inspeccionmantenimiento the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Inspeccionmantenimiento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Inspeccionmantenimiento $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inspeccionmantenimiento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
