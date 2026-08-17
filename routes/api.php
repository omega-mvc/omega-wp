<?php

use App\Http\Controllers\Tasks\IndexController;
use Omega\Routing\Facade\Route;

defined('ABSPATH') || exit;

Route::prefix('omega-wp/v1')->group(function () {
	Route::get('/tasks', [IndexController::class, 'handle']);
});
