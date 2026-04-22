<?php

declare(strict_types=1);

use Omega\Application\Application;

$app = new Application(dirname(__DIR__), 'omega-wp');

$app->bootstrap();

return $app;