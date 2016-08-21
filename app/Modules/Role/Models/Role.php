<?php 

namespace App\Modules\Role\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

	public $incrementing = false;
	protected $table = "roles";
	public $timestamps = true;
	protected $guarded = [];

}
