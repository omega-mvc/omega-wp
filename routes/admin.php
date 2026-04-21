<?php

use App\Http\Controllers\TaskController;
use Omega\Facades\Route;

defined('ABSPATH') || exit;

//You can access this example route with: /cd
/**Route::page('my-page-id')->guards(['edit_posts'])->group(function () {
	Route::get('/path-example', [TaskController::class, 'index']);
});*/

Route::page('my-page-id')->group(function () {
    Route::get('/path-example', [TaskController::class, 'create']);
});