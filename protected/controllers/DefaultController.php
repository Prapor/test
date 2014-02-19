<?php

class DefaultController extends Controller
{
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			switch (Yii::app()->errorHandler->error['code']) {
				case '404':
					$error = 'Модуль не найден';
					break;
				
				default:
					$error = 'Не известная ошибка';
					break;
			}

			$this->render('error', array('error'=> $error));
		}

	}
}