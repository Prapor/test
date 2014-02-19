<?php
Yii::import('zii.widgets.CPortlet');

class UserMenuLeft extends CPortlet
{
	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userMenuLeft', array('controller' => Yii::app()->getController()->getId()));
	}
}