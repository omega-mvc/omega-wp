<?php

declare(strict_types=1);

use Omega\Application\ApplicationFactory;

$app = ApplicationFactory::create(
    id: 'omega-wp',
    config: ['base_path' => dirname(__DIR__)]
);

return $app;