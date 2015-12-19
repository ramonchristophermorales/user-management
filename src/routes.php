<?php
/**
 * routes used for user management
 */
Route::group(['prefix' => 'user-management'], function() {

    Route::group(['middleware' => 'um.auth'], function() {

        Route::get('dashboard', 'UserManagementController@index');

    });


    Route::get('login', 'UserManagementController@login');

});

