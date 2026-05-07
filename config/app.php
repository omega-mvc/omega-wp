<?php

declare(strict_types=1);

return [
    'admin'       => [
        'menu'  => App\Admin\Menu::class,
        'setup' => App\Admin\Setup::class
    ],

    'translation' => [
        'type'   => 'theme', // theme o plugin, poi ti spiego
        'enable' => true
    ],
];
