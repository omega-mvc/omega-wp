<?php

declare(strict_types=1);

use function Omega\Environment\env;

return [
	'environment' => env('APP_ENV', ''),
	'debug'       => env('APP_DEBUG', ''),
	'admin' => [
		'menu'  => App\Admin\Menu::class,
		'setup' => App\Admin\Setup::class
	],

	'translation' => [
		'type'   => 'theme', // theme o plugin, poi ti spiego
		'enable' => true
	],
];
