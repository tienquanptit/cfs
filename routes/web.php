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

//*************** Phan Admin *****************
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/home', function () {
    return view('admin.home');
});

Route::resource('/admin/confessions', 'admin\ConfessionController')->except(['create', 'store', 'edit', 'update']);