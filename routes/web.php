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
    return view('welcome');
});

Route::resource('/cfs', 'User\HomeController');

Route::resource('/confession', 'User\ConfessionController');

//*************** Phan Admin *****************
//login
Route::get('admin/login', [
    'as' => 'login',
    'uses' => 'admin\loginController@ViewLogin',
]);
Route::post('admin/login', [
    'as' => 'loginAdmin',
    'uses' => 'admin\loginController@PostLogin',
]);
//logout
Route::get('admin/logOut', [
    'as' => 'logout',
    'uses' => 'admin\loginController@AdminlogOut',
]);
Route::group(['prefix' => 'admin', 'middleware' => ['adminLogin', 'locale']], function () {
    Route::resource('dashboard', 'admin\DashboardController');
    Route::get('change-language/{lang}', [
        'as' => 'change_lang',
        'uses' => 'admin\DashboardController@change_lang',
    ]);

    Route::resource('confessions', 'admin\ConfessionController')->except(['create', 'store', 'edit', 'update']);
    Route::get('home', function () {
        return view('admin.home');
    });
});
