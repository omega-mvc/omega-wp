<?php

namespace App\Models;

use Omega\Database\Eloquent\AbstractModel;

defined( 'ABSPATH' ) || exit;

class Task extends AbstractModel {

	/**
	 * Indicates if the model should be timestamped.
	 */
	public bool $timestamps = true;

}
