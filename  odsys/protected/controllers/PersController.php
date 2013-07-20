<?php

class PersController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','create','update','admin','delete','view'),
				'users'=>array('@'),
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
		$model=new Pers;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pers']))
		{
			$model->attributes=$_POST['Pers'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CED));
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

		if(isset($_POST['Pers']))
		{
			$model->attributes=$_POST['Pers'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->CED));
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
		$dataProvider=new CActiveDataProvider('Pers');
		/*
		*
		*Linea de ejecucion libreria pdf
		*http://www.yiiframework.com/extension/pdf
		*
		*/
		if(isset($_GET['pdf'])){
			$this->layout='//layouts/pdf';
        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1->WriteHTML($this->render('index', array('dataProvider'=>$dataProvider),true));
		$mPDF1->Output();
		
		}
		
		/*
		*
		*Genereador de excel usando la clase request
		*
		*/
		if(isset($_GET['xls'])){
		$model=Pers::model()->findAll();
		Yii::app()->request->sendFile('Personas.xls',$this->renderPartial('excel',array('model'=>$model,),true));
		}
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pers('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pers']))
			$model->attributes=$_GET['Pers'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pers the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pers::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Ha ocurrido una ecepcion , Clic en Home para salir de aqui.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pers $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pers-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
