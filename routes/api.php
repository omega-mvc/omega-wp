<?php

use App\Http\Controllers\TaskController;
use Omega\Routing\Facade\Route;

defined('ABSPATH') || exit;

Route::prefix('omega-wp/v1')->guards(['edit_posts'])->group(function () {
	Route::get('/tasks', [TaskController::class, 'index']);
});
