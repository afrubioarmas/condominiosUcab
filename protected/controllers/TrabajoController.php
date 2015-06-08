<?php

class TrabajoController extends Controller
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
		$model=new Trabajo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Trabajo']))
		{   
			$model->attributes=$_POST['Trabajo'];
                        
                        if($model->AsambleaExtraordinaria_idAsambleaExtraordinaria==NULL && $model->CartaConsulta_idCartaConsulta==NULL){
                        
                        Yii::app()->user->setFlash('error', "Debes elegir entre Carta Consulta o Asamblea Extraordinaria");
                        $this->redirect(array('/trabajo/create'));
                        }else if($model->AsambleaExtraordinaria_idAsambleaExtraordinaria=='1' && $model->CartaConsulta_idCartaConsulta=='1'){
                        
                        Yii::app()->user->setFlash('error', "Debes elegir entre Carta Consulta o Asamblea Extraordinaria");
                        $this->redirect(array('/trabajo/create'));
                        }else{
                        if($model->AsambleaExtraordinaria_idAsambleaExtraordinaria==1){
                            $sq = "SELECT s.idAsambleaextraordinaria
                                FROM asambleaextraordinaria s
                                
                                ORDER BY s.idAsambleaextraordinaria DESC";
                            $co = Yii::app()->db->createCommand($sq);

                            $data3= $co->queryAll();   
                            //var_dump($data3);die;
                            $model->AsambleaExtraordinaria_idAsambleaExtraordinaria=$data3[0]['idAsambleaextraordinaria'];
                            
                        }else{
                            $sq = "SELECT s.idCartaConsulta
                                FROM cartaconsulta s
                                
                                ORDER BY s.idCartaConsulta DESC";
                            $co = Yii::app()->db->createCommand($sq);

                            $data3= $co->queryAll();   
                            //var_dump($data3);die;
                            $model->CartaConsulta_idCartaConsulta=$data3[0]['idCartaConsulta'];
                            
                        }
                        
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->idTrabajo));
                        }
		}
                
                $sql = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $com = Yii::app()->db->createCommand($sql);
                
                $data= $com->queryAll();   
                //var_dump($data3);die;
                foreach ($data as $value) {
                    $aux1[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux1;
                //var_dump($data3);die;
                
                 $sq = "SELECT s.idServicio, s.Descripcion,s.monto, p.Nombre
                    FROM servicio s
                    JOIN proveedor p ON s.Proveedor_Rif = p.Rif
                    ORDER BY p.Nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                //var_dump($data3);die;
                foreach ($data3 as $value) {
                    $aux[$value['idServicio']] = $value['Nombre'].'->'.$value['Descripcion'].'='.$value['monto'].' Bsf.';
                }
                
                $servicios = $aux;
                //var_dump($data3);die;
                

		$this->render('create',array(
			'model'=>$model,
			'servicios'=>$servicios,
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

		if(isset($_POST['Trabajo']))
		{
			$model->attributes=$_POST['Trabajo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idTrabajo));
		}

                 $sq = "SELECT s.idServicio, s.Descripcion,s.monto, p.Nombre
                    FROM servicio s
                    JOIN proveedor p ON s.Proveedor_Rif = p.Rif
                    ORDER BY p.Nombre ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                //var_dump($data3);die;
                foreach ($data3 as $value) {
                    $aux[$value['idServicio']] = $value['Nombre'].'->'.$value['Descripcion'].'='.$value['monto'].' Bsf.';
                }
                
                $servicios = $aux;
                //var_dump($data3);die;
                    
		$this->render('update',array(
			'model'=>$model,
                        'servicios'=>$servicios,
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
		$dataProvider=new CActiveDataProvider('Trabajo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Trabajo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Trabajo']))
			$model->attributes=$_GET['Trabajo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Trabajo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Trabajo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Trabajo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='trabajo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
