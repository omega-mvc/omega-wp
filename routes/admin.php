<?php

use App\Http\Controllers\Tasks\IndexController;
use Omega\Routing\Facade\Route;

defined('ABSPATH') || exit;

Route::page('omega-wp')->guards(['edit_posts'])->group(function () {
	Route::get('/', [IndexController::class, 'handle']);
});
