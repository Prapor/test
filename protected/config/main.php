<?php
return array(
	
	'name' => 'Yiinews',
	'theme' => 'default',
	'sourceLanguage' => 'ru',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'defaultController' => 'news',
	'import' => array(
			'application.components.*',
			'application.models.*',
		),

	'preload' => array('log'),

	'components' => array(

		'log' => array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
					'enabled' => YII_DEBUG,
				),
				array(
					'class'=>'CWebLogRoute',
					'levels'=>'error, warning, trace, profile, info',
					'enabled' => YII_DEBUG,
				),
				array(
					'class'=>'CProfileLogRoute',
					'levels'=>'profile, info, trace',
					'enabled'=> YII_DEBUG,
				),
			),
		),
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				'index' => 'news',
				),
			),
		'errorHandler' => array(
			'errorAction' => 'default/error',
			),

		'Date' => array(
			'class'=>'application.components.Date',
			),
		'syntaxhighlighter' => array(
			'class' => 'application.components.JMSyntaxHighlighter.JMSyntaxHighlighter',
			),
		'file'=>array(
			'class' => 'application.components.CFile',
			),
	),
);