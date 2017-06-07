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

	function dataItems()
	{
		$newsList = [
			['id' => 1, 'title' => 'First World War', 'date' => '1914-07-28'],
			['id' => 2, 'title' => 'Second World War', 'date' => '1939-09-01'],
			['id' => 3, 'title' => 'First man on the moon', 'date' => '1969-07-20'],
			['id' => 4, 'title' => 'Test', 'date' => '1969-07-20']
		];

		return $newsList;
	}

	function actionItemsList()
	{
		$newsList = $this->dataItems();

		return $this->render('itemsList', ['newsList' => $newsList]);
	}

	function actionItemDetail($id)
	{
		$newsList = $this->dataItems();

		$item = null;
		foreach ($newsList as $n) {
			if ($id == $n['id']) $item = $n;
		}

		return $this->render('itemDetail', ['item' => $item]);
	}
}