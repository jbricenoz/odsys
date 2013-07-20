<?php

class ReportsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//private $idCodt = 1;
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

	public function accessRules()
	{
		return array(
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('index','create','update','admin','delete','view','report1','excel','pdf','reporteqp','reportgeneral','reportinfra'),
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


	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionReport1()
	{
		$modelCons = Cons::model();
		if(isset($_POST['Cons'])){
			$modelCons->attributes = $_POST['Cons'];
			$this->render('report1',array(
					'model'=>$modelCons,
					'idCod'=>$modelCons->COD,
					'fecha'=>$modelCons->FECHA,
					'excel'=>0,
					'pdf'=>0,
			));
		}
		else{
			$this->render('report1',array(
					'model'=>$modelCons,
					'idCod'=>0,
					'fecha'=>0,
					'excel'=>0,
					'pdf'=>0,
			));
		}

	}
	
	public function actionReporteqp()
	{
		$modelEqp = Eqp::model();
		if(isset($_POST['Eqp'])){
			$modelEqp->attributes = $_POST['Eqp'];
			$this->render('reporteqp',array(
					'model'=>$modelEqp,
					'idCod'=>$modelEqp->COD,
					'fecha'=>2013,
					'excel'=>0,
					'pdf'=>0,
			));
		}
		else{
			$this->render('reporteqp',array(
					'model'=>$modelEqp,
					'idCod'=>0,
					'fecha'=>2013,
					'excel'=>0,
					'pdf'=>0,
			));
		}
	
	}
	
	public function actionReportinfra()
	{
		$modelEqp = Infra::model();
		if(isset($_POST['Infra'])){
			$modelEqp->attributes = $_POST['Infra'];
			$this->render('reportInfra',array(
					'model'=>$modelEqp,
					'idCod'=>$modelEqp->COD,
					'fecha'=>2013,
					'excel'=>0,
					'pdf'=>0,
			));
		}
		else{
			$this->render('reportInfra',array(
					'model'=>$modelEqp,
					'idCod'=>0,
					'fecha'=>2013,
					'excel'=>0,
					'pdf'=>0,
			));
		}
	
	}
	
	public function actionReportgeneral()
	{
		$modelgeneral = Up::model();
		if(isset($_POST['Up'])){
			$modelgeneral->attributes = $_POST['Up'];
			$this->render('reportGeneral',array(
					'model'=>$modelgeneral,
					'idCod'=>$modelgeneral->COD,
					'fecha'=>2013,
					'excel'=>0,
					'pdf'=>0,
			));
		}
		else{
			$this->render('reportGeneral',array(
					'model'=>$modelgeneral,
					'idCod'=>0,
					'fecha'=>2013,
					'excel'=>0,
					'pdf'=>0,
			));
		}
	
	}
	
	public function actionExcel($idCodt,$fecha)
	{
		$modelCons = Cons::model();
			$this->render('report1',array(
					'model'=>$modelCons,
					'idCod'=>$idCodt,
					'fecha'=>$fecha,
					'excel'=>$idCodt,
					'pdf'=>0,
			));
	}
	
	public function actionPdf($idCodt,$fecha)
	{
		$modelCons = Cons::model();
		$model=new Cons();
		$this->render('report1',array(
				'model'=>$model,
				'idCod'=>$idCodt,
				'fecha'=>$fecha,
				'excel'=>0,
				'pdf'=>$idCodt,
		));
	}

}
