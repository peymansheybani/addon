<?php
return [
    'loader' => [
        // load default component
    ],

    'permission' => [
        // permission list
        'showUser',
        'addUser',
    ],

    'AdminViewTemplatePath' => 'Resources/view/admin/',
    'ClientViewTemplatePath' => 'Resources/view/client/',
    'AdminControllerPath' => 'Http/Controller/',
    'ClientControllerPath' => 'Http/Controller/client/',
    'RoutePath' => 'Routes/',
    'ModelPath' => 'Models/',

    'settingConfig' => [
        'table' => 'setting',
        'code'  => 'cancel_request_hook'
    ]
];