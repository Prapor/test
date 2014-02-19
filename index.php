<?php
	$date = date("d.m.y");
	
	$dat = date("d.m.y H:i:s");
	$ip = $_SERVER["REMOTE_ADDR"];
	$url = $_SERVER["REDIRECT_URL"];
	$ref = $_SERVER['HTTP_REFERER'];
	$agent = $_SERVER["HTTP_USER_AGENT"];
	
	$log = "$dat : $ip : $time: $url : $ref : $agent";
	
	$fp = fopen("log/$date.log", "a+");
	
	if (flock($fp, LOCK_EX)) { 
	    fwrite($fp, "$log \r\n");
	    flock($fp, LOCK_UN); 
	}
	
	fclose($fp);
		

$yii = 'framework/yii.php';
defined('YII_DEBUG') or define('YII_DEBUG', false);

if($_SERVER['HTTP_HOST']=='yiinews.local'){
	$config = 'protected/config/local.php';
}
else { 
	$config = 'protected/config/production.php';
}


require_once($yii);
Yii::createWebApplication($config) -> run();

