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
    [
        'rule' => '/admin/edit-product',
        'controller' => 'admin/controller/edit_product'
    ],
    [
        'rule' => '/admin/ajax',
        'controller' => 'admin/controller/ajax'
    ],
];