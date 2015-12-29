<?php

return [
    'prefix' => 'admin',
    'filter' => [
        'auth' => [
            Laraviet\Admin\Middleware\Authenticate::class,
            Laraviet\Admin\Middleware\OnlyAdmin::class
        ],
        'guest' => Laraviet\Admin\Middleware\RedirectIfAuthenticated::class,
    ],
    'views' => [
        'layout' => 'admin::layouts.master',
        'post' => 'admin::article'
    ],
    'article' => [
        'model' => 'Laraviet\Admin\Entities\Article',
        'perpage' => 10
    ],
    'page' => [
        'perpage' => 10
    ],
    'user' => [
        'model' => 'Laraviet\Admin\Entities\User',
        'perpage' => 10
    ],
    'role' => [
        'model' => 'Laraviet\Admin\Entities\Role',
        'perpage' => 10
    ],
    'permission' => [
        'model' => 'Laraviet\Admin\Entities\Permission',
        'perpage' => 10
    ],
    'category' => [
        'model' => 'Laraviet\Admin\Entities\Category',
        'perpage' => 10
    ],
];
