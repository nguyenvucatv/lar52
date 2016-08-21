<?php

Route::group(array('module' => 'User','prefix' => 'nv-admin/role','middleware' =>  ['web'], 'namespace' => 'App\Modules\Role\Controllers'), function() {    

    Route::get('/', ['uses' => 'RoleAdminController@index', 'as' => 'role.admin.index']);

}); 