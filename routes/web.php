<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();


Route::get('/home', function () {
    return redirect('/admin/dashboard');
});

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('dashboard', 'DashboardController@index');

    Route::put('profile/change-password', 'ProfileController@putChangePassword');
    Route::resource('profile', 'ProfileController');

    Route::resource('settings', 'SettingController');

    Route::put('users/change-password', 'UsersController@putChangePassword');
    Route::resource('users', 'UsersController');

});
