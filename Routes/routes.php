<?php
return [
    'admin' => [
        'user/list' => [
            'controller' => 'UserController@index',
            'middleware' => [

            ],
            'name' => 'لیست کاربران',
            'perm' => 'userList'
        ],
        'admin/index' => [
            'controller' => 'AdminController@index',
            'middleware' => [

            ],
            'name' => 'لیست کاربران',
            'perm' => 'adminIndex'
        ]
    ],
    'client' => [
        'order/list' => [
            'controller' => 'OrderController@index',
            'middleware' => [

            ],
            'name' => 'لیست سفارشات'
        ]
    ]

];