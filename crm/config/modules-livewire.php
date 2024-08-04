<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Namespace
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => 'Livewire',

    /*
    |--------------------------------------------------------------------------
    | View Path
    |--------------------------------------------------------------------------
    |
    */

    'view' => 'Resources/views/livewire',

    /*
    |--------------------------------------------------------------------------
    | Custom modules setup
    |--------------------------------------------------------------------------
    |
    */

    // 'custom_modules' => [
    //     'Chat' => [
    //         'path' => base_path('libraries/Chat'),
    //         'module_namespace' => 'Libraries\\Chat',
    //         // 'namespace' => 'Livewire',
    //         // 'view' => 'Resources/views/livewire',
    //         // 'name_lower' => 'chat',
    //     ],
    // ],

    'custom_modules' => [
        'Products' => [
            'path' => base_path('app/Modules/Products'),
            'module_namespace' => 'App\\Modules\\Products',
            // 'namespace' => 'Livewire',
            // 'view' => 'Resources/views/livewire',
            // 'name_lower' => 'chat',
        ],
    ],

];
