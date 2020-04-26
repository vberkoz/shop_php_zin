<?php

return array(
    'product/([0-9]+)/([0-9]+)' => 'product/show/$1/$2',

    'category/([0-9]+)/page-([0-9]+)' => 'product/index/$1/$2',
    'category/([0-9]+)' => 'product/index/$1',

    'bag/add/([0-9]+)' => 'bag/add/$1',
    'bag/add-ajax/([0-9]+)' => 'bag/addajax/$1',
    'bag/checkout' => 'bag/checkout',
    'bag/remove/([0-9]+)' => 'bag/remove/$1',
    'bag' => 'bag/index',

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',

    'signup' => 'user/signup',
    'signin' => 'user/signin',
    'signout' => 'user/signout',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet/history' => 'cabinet/history',
    'cabinet' => 'cabinet/index',

    'contact' => 'site/contact',

    '' => 'site/index',
);