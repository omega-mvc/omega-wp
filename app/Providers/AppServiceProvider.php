<?php

namespace App\Providers;

use Omega\Container\ServiceProvider;

use App\Admin\Setup;

defined( 'ABSPATH' ) || exit;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 */
	public function register(): void {
		//
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void {
		add_action( 'init', [ $this, 'admin_setup' ] );
	}
	/**
	 * Admin setup method.
	 */
	public function admin_setup(): void {
		new Setup();
	}
}
