<?php

class ObecnosciController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1_2';

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
				'actions'=>array('index','view', 'days', 'students', 'student', 'update', 'create', 'delete'),
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
	public function actionView($dzien)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($dzien),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Obecnosci;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Obecnosci']))
		{
			$model->attributes=$_POST['Obecnosci'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_obecnosci));
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
	public function actionUpdate()   {
        if(isset($_POST['id_obecnosci']))   {
        $sql = "UPDATE tbl_obecnosci SET obecny = :obecny WHERE id_obecnosci = :id_obecnosci";
        $obecny;
        $command = Yii::app()->db->createCommand($sql);
        if($_POST['obecny'] == '+') $obecny = '-';
        else $obecny = '+';
        $command->bindParam(":obecny", $obecny);
        $command->bindParam(":id_obecnosci", $_POST['id_obecnosci']);
        $command->execute();

        }
        else   {
            $sql = "INSERT INTO  tbl_obecnosci (id, dzien, obecny) VALUES (:id, :dzien, :obecny)";
            $command = Yii::app()->db->createCommand($sql);
            if($_POST['obecny'] == '+') $obecny = '-';
            else $obecny = '+';
            $command->bindParam(":obecny", $obecny);
            $command->bindParam(":id", $_POST['id']);
            $command->bindParam(":dzien", $_POST['dzien']);
            $command->execute();

        }
        $this->redirect(array('days', 'dzien'=>$_POST['dzien']));
	/*	if(isset($_POST['obecnosc']))   {
			$model->attributes=$_POST['Obecnosci'];
			if($model->save())
				$this->redirect(array('','id'=>$model->id_obecnosci));
		}*/
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
		$day = $_POST['dzien'];
        $sql = "DELETE FROM tbl_obecnosci WHERE tbl_obecnosci.dzien = :dzien";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":dzien", $day);
        $command->execute();
        $this->redirect(array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model=new Obecnosci;

        if(isset($_POST['Obecnosci']))  {
            $model->attributes=$_POST['Obecnosci'];
            if($model->save())
                $this->redirect(array('index'));
        }

        $dataProvider = new CActiveDataProvider('Obecnosci');
        $sql = "SELECT DISTINCT tbl_obecnosci.dzien FROM tbl_obecnosci ORDER BY tbl_obecnosci.dzien DESC";
        $command = Yii::app()->db->createCommand($sql);
        $dataReader=$command->query();
        $this->render('index', array('dataProvider' => $dataProvider, 'dataReader' => $dataReader, 'model' => $model));
    }

    public function actionDays()    {
        $day = $_GET['dzien'];
        $sql = "SELECT tbl_uczen.id, tbl_uczen.imie, tbl_uczen.nazwisko, tbl_obecnosci.obecny, tbl_obecnosci.id_obecnosci
                FROM tbl_uczen LEFT JOIN tbl_obecnosci ON tbl_uczen.id = tbl_obecnosci.id
                AND tbl_obecnosci.dzien = :dzien ORDER BY tbl_uczen.nazwisko";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":dzien", $day);
        $dataReader=$command->query();
        $this->render('days', array('dataReader' => $dataReader));
    }

       public function actionStudents() {
           $dataProvider = new CActiveDataProvider('Uczen');
           $this->render('students', array('dataProvider' => $dataProvider));
       }

    public function actionStudent()    {
        $id = $_GET['student'];
<<<<<<< HEAD
		$present = '+';
        $sql = "SELECT tbl_obecnosci.dzien FROM tbl_uczen LEFT JOIN tbl_obecnosci ON tbl_uczen.id = tbl_obecnosci.id WHERE tbl_uczen.id = :id AND tbl_obecnosci.obecny = :present";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":id", $id);
		$command->bindParam(":present", $present);
=======
	$present = '+';
        $sql = "SELECT tbl_obecnosci.dzien FROM tbl_uczen LEFT JOIN tbl_obecnosci ON tbl_uczen.id = tbl_obecnosci.id WHERE tbl_uczen.id = :id AND tbl_obecnosci.obecny = :present";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":id", $id);
	$command->bindParam(":present", $present);
>>>>>>> 835e886ea1afb323f27e7af00f2dd1422116dfbf
        $dataReader=$command->query();
        $this->render('student', array('dataReader' => $dataReader));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Obecnosci('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Obecnosci']))
			$model->attributes=$_GET['Obecnosci'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Obecnosci the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($dzien)
	{
		$model=Obecnosci::model()->findByAttributes(array('dzien'=>$dzien));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Obecnosci $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='obecnosci-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
