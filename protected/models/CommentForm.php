<?php

class CommentForm extends CActiveRecord
{
	public $name;
	public $email;
	public $comment;
	public $nid;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return Yii::app()->db->tablePrefix.'news_comment';
	}

	public function rules()
	{
		return array(
			array('name, email, comment', 'required'),
			array('name', 'length', 'min'=>3, 'max'=>15, 'tooLong'=>'Имя слишком длинное (Максимум: {max} символа)', 'tooShort' => 'Имя слишком короткое (Минимум: {min} символа)'),
			array('email', 'email'),
			array('comment', 'length', 'min'=>3, 'max'=>450, 'tooLong'=>'Ваш комментарий очень длинны (Максимум: {max} символа)', 'tooShort' => 'Ваш комментарий очень короткий (Минимум: {min} символа)'),
			array('nid', 'safe'),
			);
	}

}