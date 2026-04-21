<?php

return [
	'plugin_id' => 'acme-task-manager',
	'build' => [
		'output_dir' => 'dist',
		'copy' => [],
		'prefixer' => [
			'enabled' => true,
			'namespace_prefix' => 'Acme\\TaskManager\\',
		]
	]
];
