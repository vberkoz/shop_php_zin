<?php

return array(
    'product/([0-9]+)' => 'product/show/$1',
    'products' => 'product/index',
    'category/([0-9]+)/page-([0-9]+)' => 'product/index/$1/$2',
    'category/([0-9]+)' => 'product/index/$1',

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',

    'user/register' => 'user/register',

    '' => 'site/index',
);