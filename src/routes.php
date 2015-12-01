<?php
/**
 * routes used for user management
 */
Route::group([
    'prefix' => 'user-management',
    'middleware' => 'um.auth'
], function() {

    Route::get('', 'UserManagementController@index');
    Route::get('login', 'UserManagementController@login');

});

