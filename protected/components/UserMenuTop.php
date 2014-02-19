<?php
Yii::import('zii.widgets.CPortlet');

class UserMenuTop extends CPortlet
{
	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userMenuTop', array('controller' => Yii::app()->getController()->getId()));
	}
}