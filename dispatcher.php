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
    [
        'rule' => '/contact-us',
        'controller' => 'controller/contact_us'
    ],
    [
        'rule' => '/xml_feed',
        'controller' => 'controller/xml_feed'
    ],
    // ADMIN
    [
        'rule' => '/admin',
        'controller' => 'admin/controller/main'
    ],
    [
        'rule' => '/admin/connect',
        'controller' => 'admin/controller/connect'
    ],
    [
        'rule' => '/admin/edit-product',
        'controller' => 'admin/controller/edit_product'
    ],
    [
        'rule' => '/admin/list-about',
        'controller' => 'admin/controller/list_about'
    ],
    [
        'rule' => '/admin/edit-about',
        'controller' => 'admin/controller/edit_about'
    ],
    [
        'rule' => '/admin/ajax',
        'controller' => 'admin/controller/ajax'
    ],
    [
        'rule' => '/admin/delete',
        'controller' => 'admin/controller/delete'
    ],
];