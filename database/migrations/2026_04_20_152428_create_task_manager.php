<?php

use Omega\Database\Migrations\Migration;
use Omega\Database\Schema\Blueprint;
use Omega\Database\Schema\Schema;

defined( 'ABSPATH' ) || exit;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::table( 'task_manager', function (Blueprint $table) {
			// Add/modify columns to the table
		} );
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::table( 'task_manager', function (Blueprint $table) {
			// Remove the changes made in up() method
		} );
	}
};
