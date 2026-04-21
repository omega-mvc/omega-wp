<?php

use App\Http\Controllers\TaskController;
use Omega\Facades\Route;

defined('ABSPATH') || exit;

/**Route::prefix('omega-wp/v1')->guards(['edit_posts'])->group(function () {
	Route::get('/tasks', [TaskController::class, 'index']);
});*/

Route::prefix('omega-wp/v1')->group(function () {
    Route::get('tasks', [TaskController::class, 'index']);
});