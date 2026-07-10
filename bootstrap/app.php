<?php

declare(strict_types=1);

use Omega\Application\ApplicationFactory;

$app = ApplicationFactory::createPlugin(
    id: 'omega-wp',
    basePath: dirname(__DIR__)
);

return $app;