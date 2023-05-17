<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator;

/**
 * Please add Breadcrumbs name same like route name
 */

Breadcrumbs::for('admin.dashboard', function (Generator $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});
