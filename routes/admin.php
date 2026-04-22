<?php

use App\Http\Controllers\TaskController;
use Omega\Routing\Facade\Route;

defined('ABSPATH') || exit;

//You can access this example route with: /wp-admin/admin.php?page=my-page-id&path=/path-example";
/**Route::page('my-page-id')->guards(['edit_posts'])->group(function () {
	Route::get('/path-example', [TaskController::class, 'index']);
});*/

Route::page('my-page-id')->group(function () {
    Route::get('/path-example', [TaskController::class, 'create']);
});