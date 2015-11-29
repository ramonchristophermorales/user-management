<?php
/**
 * routes used for user management
 */

Route::group([
    'prefix' => 'user-managemet',
    'namespace' => 'RamonChristopherMorales\UserManagement\Controllers'
], function() {

    Route::get('', 'UserManagementController@index');

});

