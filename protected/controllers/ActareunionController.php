<?php

class ActareunionController extends Controller
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
		$model=new Actareunion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Actareunion']))
		{
			$model->attributes=$_POST['Actareunion'];
                        
                        $auxiliar = Juntacondominio::model()->findAll('Edificio_RIF=:Edificio_RIF', array('Edificio_RIF' => $_POST['Actareunion']['Edificio_RIF']));
                        //var_dump($auxiliar,$model);die;
                        $model->JuntaCondominio_idJuntaCondominio=$auxiliar[0]->idJuntaCondominio;
			if($model->save())
				$this->redirect(array('view','id'=>$model->idActaReunion));
		}

                $sql = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $com = Yii::app()->db->createCommand($sql);
                
                $data = $com->queryAll();   
                //var_dump($data);die;
                foreach ($data as $value) {
                    $aux[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux;
                //var_dump($edificios);die;
                
                $sq = "SELECT O.idOficina, O.Lugar_idLugar, l.Nombre
                    FROM oficina O
                    JOIN lugar l ON O.Lugar_idLugar = l.idLugar
                    ORDER BY O.Lugar_idLugar ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                //var_dump($data3);die;
                foreach ($data3 as $value) {
                    $aux2[$value['idOficina']] = $value['Nombre'];
                }
                
                $oficinas = $aux2;
                //var_dump($data3);die;
                
                $sql2 = "SELECT t.Cedula, t.Nombre, t.Apellido
                    FROM trabajadorempresa t
                    ORDER BY t.Nombre ASC";
                $com2 = Yii::app()->db->createCommand($sql2);
                
                $trabajadoresempresa= $com2->queryAll();   
                //var_dump($data3);die;
                foreach ($trabajadoresempresa as $value) {
                    $aux3[$value['Cedula']] = $value['Nombre'].' '. $value['Apellido'];
                }
                
                $trabajadoresempresa = $aux3;
                //var_dump($data3);die;
                
                
		$this->render('create',array(
			'model'=>$model,
                        'edificios'=>$edificios,
                        'oficinas'=>$oficinas,
                        'trabajadoresempresa'=>$trabajadoresempresa,
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

		if(isset($_POST['Actareunion']))
		{
			$model->attributes=$_POST['Actareunion'];
                         $auxiliar = Juntacondominio::model()->findAll('Edificio_RIF=:Edificio_RIF', array('Edificio_RIF' => $_POST['Actareunion']['Edificio_RIF']));
                        //var_dump($auxiliar,$model);die;
                        $model->JuntaCondominio_idJuntaCondominio=$auxiliar[0]->idJuntaCondominio;
			if($model->save())
				$this->redirect(array('view','id'=>$model->idActaReunion));
		}
                
                $sql = "SELECT e.RIF, e.Nombre
                    FROM edificio e
                    ORDER BY e.Nombre ASC";
                $com = Yii::app()->db->createCommand($sql);
                
                $data = $com->queryAll();   
                //var_dump($data);die;
                foreach ($data as $value) {
                    $aux[$value['RIF']] = $value['Nombre'];
                }
                $edificios = $aux;
                //var_dump($edificios);die;
                
                $sq = "SELECT O.idOficina, O.Lugar_idLugar, l.Nombre
                    FROM oficina O
                    JOIN lugar l ON O.Lugar_idLugar = l.idLugar
                    ORDER BY O.Lugar_idLugar ASC";
                $co = Yii::app()->db->createCommand($sq);
                
                $data3= $co->queryAll();   
                //var_dump($data3);die;
                foreach ($data3 as $value) {
                    $aux2[$value['idOficina']] = $value['Nombre'];
                }
                
                $oficinas = $aux2;
                //var_dump($data3);die;
                
                $sql2 = "SELECT t.Cedula, t.Nombre, t.Apellido
                    FROM trabajadorempresa t
                    ORDER BY t.Nombre ASC";
                $com2 = Yii::app()->db->createCommand($sql2);
                
                $trabajadoresempresa= $com2->queryAll();   
                //var_dump($data3);die;
                foreach ($trabajadoresempresa as $value) {
                    $aux3[$value['Cedula']] = $value['Nombre'].' '. $value['Apellido'];
                }
                
                $trabajadoresempresa = $aux3;
                //var_dump($data3);die;
                
		$this->render('update',array(
			'model'=>$model,
                        'edificios'=>$edificios,
                        'oficinas'=>$oficinas,
                        'trabajadoresempresa'=>$trabajadoresempresa,
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
		$dataProvider=new CActiveDataProvider('Actareunion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Actareunion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Actareunion']))
			$model->attributes=$_GET['Actareunion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Actareunion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Actareunion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Actareunion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='actareunion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
