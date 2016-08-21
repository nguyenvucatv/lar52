<?php

Route::group(array('module' => 'Admin','prefix' => 'nv-admin','middleware' =>  ['web'], 'namespace' => 'App\Modules\Admin\Controllers'), function() {
	
    Route::get('/', ['uses' => 'AdminAdminController@index', 'as' => 'admin.admin.index']);   
	
});	