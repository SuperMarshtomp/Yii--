<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginUser;

class ScoreController extends Controller
{
	//public $layout= false;
	
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		$model = new LoginUser();
        return $this->render('index',['model' => $model,]);
    }
}
