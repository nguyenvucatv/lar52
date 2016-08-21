<?php

Route::group(array('module' => 'User','prefix' => 'nv-admin/permission','middleware' =>  ['web'], 'namespace' => 'App\Modules\Permission\Controllers'), function() {    

    Route::get('/', ['uses' => 'PermissionAdminController@index', 'as' => 'permission.admin.index']);

}); 