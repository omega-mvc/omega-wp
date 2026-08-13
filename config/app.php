<?php

declare(strict_types=1);

use function Omega\Environment\env;

return [
	'environment' => env('APP_ENV', 'production'),
	'debug'       => env('APP_DEBUG', false),
	'admin' => [
		'menu'  => App\Admin\Menu::class,
		'setup' => App\Admin\Setup::class
	],

	'translation' => [
		'type'   => env('APP_TRANSLATION_TYPE', 'plugin'),
		'enable' => env('APP_TRANSLATION_ENABLE', true),
	],
];
