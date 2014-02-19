<?
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'components'=>array(
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=yiinews',
                'emulatePrepare' => true,
                'username' => 'yiinews',
                'password' => 'yiinews',
                'charset' => 'utf8',
                'tablePrefix' => 'yii_',
                'enableProfiling'=> YII_DB_LOG,
                'enableParamLogging' => true,
                ),  
        ),
    )
);