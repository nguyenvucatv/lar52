<?php namespace App\Modules\Permission\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {

	public $incrementing = false;
	protected $table = "permissions";
	public $timestamps = true;
	protected $guarded = [];

}
