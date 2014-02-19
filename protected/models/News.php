<?php


class News extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return Yii::app()->db->tablePrefix.'news';
	}

	public function relations()
	{
		return array('commentCount'=>array(self::STAT, 'Comment', 'nid'));
	}	
	
}