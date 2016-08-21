<?php

Route::group(array('module' => 'User','prefix' => 'nv-admin','middleware' =>  ['web'], 'namespace' => 'App\Modules\User\Controllers'), function() {	

    Route::get('/users', ['uses' => 'UserAdminController@index', 'as' => 'user.admin.index']);

    Route::get('/user/create', ['uses' => 'UserAdminController@create', 'as' => 'user.admin.create']);
    Route::post('/user/create', ['uses' => 'UserAdminController@store', 'as' => 'user.admin.store']);

    Route::get('/user/update/{id}', ['uses' => 'UserAdminController@edit', 'as' => 'user.admin.edit']);
    Route::post('/user/update/{id}', ['uses' => 'UserAdminController@update', 'as' => 'user.admin.update']);

});	