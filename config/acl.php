<?php

return [

    'organisations' => [
        'entity' => App\Organisation::class
    ],
    'roles'         => [
        'entity' => App\Role::class
    ],
    'permissions'   => [
        'driver' => 'doctrine',
        'entity' => LaravelDoctrine\ACL\Permissions\Permission::class,
        'list'   => []
    ]

];