<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
         'request' => [
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
				],
            ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
           'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [                
                ['class' => 'yii\rest\UrlRule', 'controller' => 'employee',  'pluralize'=>false] ,
                ['class' => 'yii\rest\UrlRule', 'controller' => 'person',  'pluralize'=>false] ,
                ['class' => 'yii\rest\UrlRule', 'controller' => 'organization',  'pluralize'=>false] ,
                ['class' => 'yii\rest\UrlRule', 'controller' => 'branch',  'pluralize'=>false] ,
                ['class' => 'yii\rest\UrlRule', 'controller' => 'department',  'pluralize'=>false] ,
            ],
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
