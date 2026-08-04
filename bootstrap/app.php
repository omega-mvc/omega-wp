<?php

declare(strict_types=1);

use Omega\Application\ApplicationFactory;
use Omega\Environment\Env;

Env::load(dirname(__DIR__));

$app = ApplicationFactory::createPlugin(
    id: 'omega-wp',
    basePath: dirname(__DIR__)
);

return $app;
