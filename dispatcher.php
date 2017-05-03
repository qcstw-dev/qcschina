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
        'rule' => '/about-us',
        'controller' => 'controller/about'
    ],
    [
        'rule' => '/contact-us',
        'controller' => 'controller/contact_us'
    ],
    [
        'rule' => '/search',
        'controller' => 'controller/search'
    ],
    [
        'rule' => '/xml_feed',
        'controller' => 'controller/xml_feed'
    ],
    [
        'rule' => '/xml_feed_website',
        'controller' => 'controller/xml_feed_website'
    ],
    [
        'rule' => '/xml_feed_about_us',
        'controller' => 'controller/xml_feed_about_us'
    ],
    // ADMIN
    [
        'rule' => '/admin',
        'controller' => 'admin/controller/list_product'
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
        'rule' => '/admin/edit-website',
        'controller' => 'admin/controller/edit_website'
    ],
    [
        'rule' => '/admin/list-website',
        'controller' => 'admin/controller/list_website'
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