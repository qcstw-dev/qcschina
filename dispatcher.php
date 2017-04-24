<?php

$aRoutes = [
    [
        'rule' => '',
        'controller' => 'controller/home'
    ],
    [
        'rule' => '/home',
        'controller' => 'controller/home'
    ],
    [
        'rule' => '/about',
        'controller' => 'controller/about'
    ],
    // ADMIN
    [
        'rule' => '/admin',
        'controller' => 'admin/controller/main'
    ],
];