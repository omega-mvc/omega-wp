<?php

namespace App\Http\Controllers;

use Omega\Routing\Controller;

defined( 'ABSPATH' ) || exit;

class TaskController extends Controller {

	/**
	 * Display a listing of the resource.
	 */
	public function index() {
        return [
            'ok' => true,
            'message' => 'Task manager route works'
        ];
	}

	/**
	 * Show the form for creating a new resource.
	 */
    public function create()
    {
        echo '<div class="wrap">';
        echo '<h1>Task Manager</h1>';
        echo '<p>Admin page loaded correctly.</p>';
        echo '</div>';
    }

	/**
	 * Store a newly created resource in storage.
	 */
	public function store($request) {
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show($request) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($request) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update($request) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($request) {
		//
	}

}
