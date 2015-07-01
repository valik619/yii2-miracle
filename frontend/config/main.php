<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'main' => [
            'class' => 'modules\main\Module',
        ],
    ],
    'components' => [
        'request' => [
            'baseUrl' => ''
        ],
        'errorHandler' => [
            'errorAction' => 'main/default/error',
        ],
        'view' => [
            'theme' => 'themes\bare\Theme'
        ],
    ],
    'params' => $params,
];