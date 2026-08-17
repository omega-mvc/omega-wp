<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\AbstractController;
use Omega\View\Facade\View;

defined( 'ABSPATH' ) || exit;

class IndexController extends AbstractController
{
	/**
	 * Display a listing of the resource.
	 */
	public function handle()
	{
		echo View::render('tasks.index');
	}

}
