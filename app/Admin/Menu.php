<?php

namespace App\Admin;

use Omega\Admin\Menu\MenuBuilder;

defined( 'ABSPATH' ) || exit;

class Menu extends MenuBuilder {
	public function register() {
		$menu = $this
			->add( 'acme-task-manager', __( 'Task Manager', 'acme-task-manager' ) )
			->icon( 'dashicons-lightbulb' )
			->capability( 'manage_options' );
	}
}
