<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator;

/**
 * Please add Breadcrumbs name same like route name
 */

Breadcrumbs::for('admin.dashboard', function (Generator $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('admin.pricelist.index', function (Generator $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Pricelist', route('admin.pricelist.index'));
});

Breadcrumbs::for('admin.student.index', function (Generator $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Student', route('admin.student.index'));
});

Breadcrumbs::for('admin.news.index', function (Generator $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('News', route('admin.news.index'));
});

Breadcrumbs::for('admin.news.create', function (Generator $trail) {
    $trail->parent('admin.news.index');
    $trail->push('Create', route('admin.news.create'));
});

Breadcrumbs::for('admin.news.edit', function (Generator $trail, $news) {
    $trail->parent('admin.news.index');
    $trail->push('Edit', route('admin.news.edit', $news));
});
