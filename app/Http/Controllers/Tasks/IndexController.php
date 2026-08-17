<?php

namespace App\Http\Controllers\Tasks;

use Omega\Routing\AbstractController;
use Omega\View\Facade\View;

defined( 'ABSPATH' ) || exit;

class IndexController extends AbstractController {

	/**
	 * Display a listing of the resource.
	 */
	public function handle()
	{
		echo View::render('tasks.index');
	}

}
