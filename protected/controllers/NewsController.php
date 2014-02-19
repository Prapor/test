<?php

class NewsController extends Controller
{
	public $pageTitle = 'Новости';

	public function actionIndex()
	{
		Yii::app()->clientScript->registerMetaTag('This is an example', 'description');
		Yii::app()->clientScript->registerMetaTag('This is an example', 'keywords');

		$criteria 	= new CDbCriteria(array('order'=>'id DESC'));
		$count 		= News::model()->count($criteria);

		$pages 		= new CPagination($count);
		$pages 		->pageSize=4;
		$pages 		->applyLimit($criteria);

		$dataProvider = News::model()->with('commentCount')->findAll($criteria);
		
		$this->render('index', array('dataProvider' => $dataProvider, 'pages' => $pages));

	}

	public function actionPost($id)
	{
		// Новость 
		$model = new CommentForm;

		if(isset($_POST['CommentForm']))
		{
			$model->attributes=$_POST['CommentForm'];
			if($model->save()) 
				{
					$this->redirect($this->createUrl('', $_GET ).'#comment'.Yii::app()->db->getLastInsertId());
				}
		}

		$criteria 	= new CDbCriteria();
		$criteria->condition = 'id = '.$id;
		$count 		= News::model()->count($criteria);

		$pages 		= new CPagination($count);
		$pages 		->pageSize=0;
		$pages 		->applyLimit($criteria);

		$dataProvider = News::model()->findAll($criteria);

		// Комментарии
		$criteria 	= new CDbCriteria(array('order'=>'id ASC'));
		$criteria->condition = 'nid = '.$id;
		$dataComment = Comment::model()->findAll($criteria);
		
		$this->render('index', array('dataProvider' => $dataProvider, 'pages' => $pages, 'dataComment' => $dataComment, 'model' => $model));	
	}

	public function actionTag($id)
	{
		$criteria 	= new CDbCriteria(array('order'=>'id DESC'));
		$criteria->condition = "category LIKE :id";
		$criteria->params = array(':id' => '%' . trim($id) . '%');

		$count 		= News::model()->count($criteria);

		$pages 		= new CPagination($count);
		$pages 		->pageSize=4;
		$pages 		->applyLimit($criteria);

		$dataProvider = News::model()->with('commentCount')->findAll($criteria);

		$this->render('index', array('dataProvider' => $dataProvider, 'pages' => $pages));
	}
}