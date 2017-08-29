<?php

namespace app\controllers;

// use Yii;
// use yii\filters\AccessControl;
use yii\web\Controller;
// use yii\web\Response;
// use yii\filters\VerbFilter;
// use app\models\LoginForm;
// use app\models\ContactForm;

class CustomersController extends Controller
{
    public function actionIndex()
    {
    	// $records = $this->findRecordsByQuery();
    	return $this->render('index', compact('records'));
    }
}
