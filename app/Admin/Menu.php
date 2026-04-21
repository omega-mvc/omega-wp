<?php

namespace App\Admin;

use Omega\Admin\Menu\MenuBuilder;

defined( 'ABSPATH' ) || exit;

class Menu extends MenuBuilder {
	public function register() {
		$menu = $this
			->add( 'omega-wp', __( 'Task Manager', 'omega-wp' ) )
			->icon( 'dashicons-lightbulb' )
			->capability( 'manage_options' );
	}
}
