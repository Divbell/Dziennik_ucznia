<?php

class ObecnosciController extends Controller
{
	public $layout='//layouts/column1_2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'days', 'students', 'student', 'update', 'create', 'delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionView($dzien)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($dzien),
		));
	}

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
    }

	public function actionDelete()
	{
		$day = $_POST['dzien'];
        $sql = "DELETE FROM tbl_obecnosci WHERE tbl_obecnosci.dzien = :dzien";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":dzien", $day);
        $command->execute();
        $this->redirect(array('index'));
	}

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
		$present = '+';
        $sql = "SELECT tbl_obecnosci.dzien FROM tbl_uczen LEFT JOIN tbl_obecnosci ON tbl_uczen.id = tbl_obecnosci.id WHERE tbl_uczen.id = :id AND tbl_obecnosci.obecny = :present";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":id", $id);
		$command->bindParam(":present", $present);
        $dataReader=$command->query();
        $this->render('student', array('dataReader' => $dataReader));
    }


	public function loadModel($dzien){
		$model=Obecnosci::model()->findByAttributes(array('dzien'=>$dzien));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}