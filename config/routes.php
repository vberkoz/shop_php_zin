<?php

return array(
    'product/([0-9]+)/([0-9]+)' => 'product/show/$1/$2',
    'category/([0-9]+)/page-([0-9]+)' => 'product/index/$1/$2',
    'category/([0-9]+)' => 'product/index/$1',

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',

    'signup' => 'user/signup',
    'signin' => 'user/signin',
    'signout' => 'user/signout',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet/history' => 'cabinet/history',
    'cabinet' => 'cabinet/index',

    '' => 'site/index',
);