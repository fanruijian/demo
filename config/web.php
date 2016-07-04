<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'bdrcMjLv7p5xXjSo0UUC7Rkn-xDaRGbO',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [  
           'class' => 'yii\swiftmailer\Mailer',  
            'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件
           'transport' => [  
               'class' => 'Swift_SmtpTransport',  
               'host' => 'mail.euchost.com',  //每种邮箱的host配置不一样
               'username' => 'warning@vamaker.com',  
               'password' => '11aa!!!!',  
               'port' => '587',  
               'encryption' => 'tls',  
                                   
                           ],   
           'messageConfig'=>[  
               'charset'=>'UTF-8',  
               'from'=>['warning@vamaker.com'=>'warning@vamaker.com']  
               ],  
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
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
         'assetManager'=>[
            'bundles'=>[
                // 'yii\bootstrap\BootstrapAsset' => [
                //     'css' => []
                // ],
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'js' => []
                ],
            ],

        ]
    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
