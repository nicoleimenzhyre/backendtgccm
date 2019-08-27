<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Login User
Route::post('login', 'API\UserController@login');

// Below mention routes are available only for the authenticated users.
Route::middleware('auth:api')->group(function () {
    //dashboard
    Route::get('/dashboard', 'API\DashboardController@show');

    //roles
    Route::get('/roles', 'API\RolesController@show');
    Route::post('/roles/add-roles', 'API\RolesController@create');
    // Route::post('/roles/{id}', 'API\RolesController@update');
    // Route::delete('/roles/{id}', 'API\RolesController@delete');
    
    //user
    Route::get('/users', 'API\UserController@show');
    // Route::post('/users', 'API\UserController@create');
    // Route::delete('/users/{id}', 'API\UserController@delete');
    // Route::post('/users/add-roles/{id}', 'API\UserController@addRoles');

    Route::get('/members', 'API\MemberController@show');
    Route::get('/members/tribe-leaders', 'API\MemberController@showTribeLeaders');
    Route::post('/member/add-member', 'API\MemberController@create');
    Route::post('/member/update-member', 'API\MemberController@update');

});
