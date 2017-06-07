<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;


class NewsController extends Controller
{
	function actionIndex()
	{
		echo "this is my first controller";
	}

	function actionItemsList()
	{
		$newsList = [
			['title' => 'First World War', 'date' => '1914-07-28'],
			['title' => 'Second World War', 'date' => '1939-09-01'],
			['title' => 'First man on the moon', 'date' => '1969-07-20']
		];
		return $this->render('itemsList', ['newsList' => $newsList]);
	}
}