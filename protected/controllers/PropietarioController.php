<?php

class PropietarioController extends Controller
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
				'actions'=>array('index','view','generarResumen'),
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
		$model=new Propietario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Propietario']))
		{
			$model->attributes=$_POST['Propietario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Cedula));
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['Propietario']))
		{
			$model->attributes=$_POST['Propietario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Cedula));
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('Propietario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Propietario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Propietario']))
			$model->attributes=$_GET['Propietario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Propietario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Propietario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Propietario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='propietario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
                
	}
 
        
        
        
        
         public function actionGenerarResumen($id){
               
                
                //VAR_DUMP($aux,$aux1);DIE;
                
                $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 
                                            'P', 'cm', 'A4', true, 'UTF-8');
                
                $pdf->setPrintHeader(true);
                $pdf->setPrintFooter(false);
                $pdf->AddPage( 'P', 'LETTER' );
                $bMargin = $pdf->getBreakMargin();
                // get current auto-page-break mode
                $auto_page_break = $pdf->getAutoPageBreak();
                // disable auto-page-break
                $pdf->SetAutoPageBreak(false, 0);
                // set bacground image
                //$pdf->SetAutoPageBreak(TRUE, 5.5);
                
                $img_file = K_PATH_IMAGES.'factura.jpg';
                //var_dump($img_file);die;
                //$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 72, '', false, false, 0);
                $pdf->Image($img_file, 0, 0, 21, 27, '', '', '', false, 72, '', false, false, 0);
                
                //$pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);
                //$pdf->SetHeaderMargin(0);
                //$pdf->SetFooterMargin(0);

                //$pdf->setCellMargins(0, 0, 1, 1);
                //set auto page breaks
                $pdf->SetPageMark();

                //set image scale factor
                //$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

                // restore auto-page-break status
                //$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
                // set the starting point for the page content
                //$pdf->setPageMark();
                            /*$html = '
            <!-- EXAMPLE OF CSS STYLE -->
            <style>
                .footer{
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                }
                td {     
                    //border: 1px solid black;
                    color: #666666;
                }
                td.second {
                    border: 1px solid green;
                }
                .clave{
                    font-weight:bold;
                }
            </style>
            <table cellpadding="0" cellspacing="0" style="margin-top:10;">
                
                <tr>
                    <td width="100" height="65"></td>
                </tr>
                 <tr>
                    <td width="100" height="20"></td>
                    
                    <td width="460" height="20" style="text-align:right;padding-top:60px;">Resumen de compra N°: <b>'.$operacion->id.'</b></td>
                    
                </tr>
                <tr>
                    <td width="560" height="20">
                         <strong style="font-size:20;">Informacion Fiscal:</strong>
                    </td>
                </tr>
                
                <tr>
                    <td height="15">
                    </td>
                </tr>
                
                <tr style="font-size:15;" height="40">
                    <td width="10" height="20">
                        
                    </td>
                    <td width="550" height="20">
                        RIF: '.$info_fiscal['rif'].'.
                    </td>
                    
                </tr>
                <tr style="font-size:15;" height="40">
                    <td width="10" height="20">
                        
                    </td>
                    <td width="550" height="20">
                        Nombre: '.$info_fiscal['nombre'].'.
                    </td>
                    
                </tr>
                <tr style="font-size:15;" height="40">
                    <td width="10" height="20">
                        
                    </td>
                    <td width="550" height="20">
                        Direccion: '.$info_fiscal['direccion'].'.
                    </td>
                    
                </tr>
                <tr style="font-size:15;" height="40">
                    <td width="10" height="20">
                        
                    </td>
                    <td width="550" height="20">
                        Telefono: '.$info_fiscal['telefono'].'.
                    </td>
                    
                </tr>
                
                <tr>
                    <td height="20">
                    </td>
                </tr>
                ';
                            
                if($aux){            
                $html.='<tr>
                    <td width="560" height="20">
                         <strong style="font-size:20;">Servicios:</strong>
                    </td>
                    
                </tr> ';
                
                
                            
                foreach($aux as $add){
                    $detalle='
                              <tr>
                                    <td height="10">
                                    </td>
                              </tr>  
                              <tr>
                                    <td height="20" width="60">
                                    </td>
                                    <td width="500" height="20" >
                                        <strong>'.$add[0]->asociado->nombre.'</strong>
                                    </td>
                              </tr>
                              ';
                    foreach($add as $add2){
                        $detalle2='<tr>
                                        <td height="20" width="100">
                                        </td>
                                        <td width="230" height="20" >
                                            '.$add2->costos->nombre.'
                                        </td>
                                        <td width="230" height="20" style="text-align:right;">
                                            '.$add2->costos->valor_default.' Bs. 
                                        </td>
                                   </tr>';
                        $detalle.=$detalle2;
                    }
                    
                    $html.=$detalle;
                }  
                }
                $subtotal=$operacion->valor-$operacion->iva+$operacion->contribuyente;
                $iva=$operacion->iva;
                
                if($aux1){
                $html=$html.'   
                                <tr>
                                    <td height="20">
                                    </td>
                              </tr>
                                <tr>
                                    <td width="560" height="20">
                                         <strong style="font-size:20;">Contratos:</strong>
                                    </td>
                                 </tr>';
                
                
               
                
               
                foreach($aux1 as $add){
                    $detalle='
                            <tr>
                                <td height="10">
                                </td>
                            </tr>
                              <tr>
                                    <td height="20" width="60">
                                    </td>
                                    <td width="500" height="20" >
                                        <strong>'.$add[0]->asociado->nombre.'</strong>
                                    </td>
                              </tr>
                              ';
                    
                    
                    
                    foreach($add as $add2){
                        $detalle2='<tr>
                            
                                        <td height="20" width="100">
                                        </td>
                                        <td width="230" height="20" >
                                            '.$add2->costos->nombre.'
                                        </td>
                                        <td width="230" height="20" style="text-align:right;">
                                            '.$add2->costos->valor_default.' Bs. 
                                        </td>
                                   </tr>';
                        $detalle.=$detalle2;
                    }
                    
                    $html.=$detalle;
                    
                }
                }
                $html=$html.'</table>';
                
                $totalizar='    
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="20">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" width="500" style="text-align:right;">
                                            <span>Sub-Total:</span>
                                        </td>
                                        <td height="20" width="60" style="text-align:right;">
                                           '.$subtotal.' Bs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" width="500" style="text-align:right;">
                                            <span style="text-align:right;">IVA:</span>
                                        </td>
                                        <td height="20" width="60" style="text-align:right;">
                                           '.$iva.' Bs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" width="500" style="text-align:right;">
                                            <span style="text-align:right;">Retencion:</span>
                                        </td>
                                        <td height="20" width="60" style="text-align:right;">
                                           -'.$operacion->contribuyente.' Bs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" width="500" style="text-align:right;">
                                            <span style="text-align:right;">Total:</span>
                                        </td>
                                        <td height="20" width="60" style="text-align:right;">
                                           '.$operacion->valor.' Bs.
                                        </td>
                                    </tr>
                                    

                                </table>
                                    
';
                        
                $html.=$totalizar;
                
                
                */
                $html='hola mundo';
                
                $pdf->SetFont("times", "BI", 20);
                
                $pdf->writeHTML($html, true, false, true, false, '');
                //$pdf->Cell(0,10,"Example 002",1,1,'C');
                $pdf->Output("resumencompra_".$id.".pdf", "D");
                    
                /*
		$this->render('print',array(
			'base_url'=>$base_url,
			'model'=>$cupon,
		));*/
            
        }

        
        
        
}
        
               