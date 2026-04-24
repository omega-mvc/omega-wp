<?php

declare(strict_types=1);

use Omega\Application\Application;

$app = new Application(
    config: ['base_path' => dirname(__DIR__)],
    id: 'omega-wp'
);

$app->bootstrap();

return $app;