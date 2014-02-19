<?
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'components'=>array(
            'db'=>array(
                'connectionString' => 'mysql:host=mysql78.1gb.ru;dbname=gb_x_yiinews',
                'emulatePrepare' => true,
                'username' => 'gb_x_yiinews',
                'password' => '30ef59cf9890',
                'charset' => 'utf8',
                'tablePrefix' => 'yii_',
                'enableProfiling'=> true,
                'enableParamLogging' => true,
                ),  
        ),
    )
);